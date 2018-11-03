# -*- coding: utf-8 -*-
import requests
import argparse
import io
import json
import os

from google.oauth2 import service_account
from google.cloud import language
from google.cloud.language import enums
from google.cloud.language import types

creds = service_account.Credentials.from_service_account_file(
    "/var/www/html/BackEnd/SocialEye-ca911f59a028.json")
client = language.LanguageServiceClient(credentials=creds)

poffensive = 0
loffensive = 0

poffensive_list = []
loffensive_list = []

file1 = open("final.txt","w")
file1.close()

f=open("lastoutput.txt","w+")
f.close()

fo=open("lastoutput.txt","w")
fo.close()


def classify(text, verbose=True):
    creds = service_account.Credentials.from_service_account_file(
        "/var/www/html/BackEnd/SocialEye-ca911f59a028.json")
    language_client = language.LanguageServiceClient(credentials=creds)

    document = language.types.Document(
        content=text,
        type=language.enums.Document.Type.PLAIN_TEXT)

    response = language_client.classify_text(document)
    categories = response.categories

    result = {}

    for category in categories:
        # Turn the categories into a dictionary of the form:
        # {category.name: category.confidence}, so that they can
        # be treated as a sparse vector.
        result[category.name] = category.confidence

    return result

with open("outputone.txt","r") as o:
    r=o.readlines()

i=0
total = 0
neutral=0
while i<len(r):
    text= str(r[i]).rstrip('\n')

    s = text.split(" ")
    text2=""

    for v in s:
        if "@" in v:
            s.remove(v)

    for v in s:
        if "@" in v:
            s.remove(v)

    for v in s:
        text2=text2+" "+v


    text=text2[1:]

    text1 = text
    while len(text.split(" "))<=20:
        text = text+" "+text1

    document = types.Document(
		content=text,
		type=enums.Document.Type.PLAIN_TEXT)

    sentiment = client.analyze_sentiment(document=document).document_sentiment

    analysis = classify(text)
    for key in analysis:
        with open("lastoutput.txt","a+") as w:
            print ("category: "+key+" ")
            print ("confidence: "+str(analysis[key]))
            w.write("category: "+key+" ")
            w.write("confidence: "+str(analysis[key]))
            w.write("\n")

        if (("people & society" in key.lower() or "sensitive subjects" in key.lower()) and (float(analysis[key])<0.5 and (sentiment.score>-0.25 and sentiment.score<0.25))):
            poffensive+=1
            poffensive_list.append(text1)
        elif (("people & society" in key.lower() or "sensitive subjects" in key.lower()) and ((float(analysis[key])>=0.5) and sentiment.score<=-0.25)) or "adult" in key.lower():
            loffensive+=1
            loffensive_list.append(text1)
        else:
            pass
            neutral+=1
        print (i)
        total+=1

    i+=1

percent_poffensive = str(round((float(poffensive)/total)*100))
percent_loffensive = str(round((float(loffensive)/total)*100))
percent_neut = str(round((float(neutral)/total)*100))

with open("final.txt","a+") as w:
    w.write("\n\nContent Distribution: ")
    w.write("\nPercent potentially offensive: "+percent_poffensive)
    w.write("\nPercent likely offensive: "+percent_loffensive)
    w.write("\nPercent neutral: "+percent_neut)

    w.write("\n===========================")
    w.write(("\n\nPotentially offensive:\n=========================="))
    for v in poffensive_list:
        w.write("\n"+v)

    w.write(("\n\nLikely offensive:\n=========================="))
    for v in loffensive_list:
        w.write("\n"+v)

print ("------------")
print (total)
print(poffensive)
print (loffensive)
print ("------------")
print ("Profanity list: ")
print ("Potentially offensive list: ")
print (poffensive_list)
print ("Likely offensive list: ")
print (loffensive_list)

