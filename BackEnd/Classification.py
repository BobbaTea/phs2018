# -*- coding: utf-8 -*-
import sys
import twitter
import requests
import time
from time import sleep
import argparse
import io
import json
import os

from google.oauth2 import service_account
from google.cloud import language
from google.cloud.language import enums
from google.cloud.language import types

hand = str(sys.argv[1])
id = str(sys.argv[2])

f=open("User"+str(id)+".txt","w+")
f.close()


twitter_consumer_key = '1hzEEKAnhiiy6mRUvROfOHVsr'
twitter_consumer_secret = 'Cme0jpREgjfWEz2XhwZ1h9nwfoygU2XWdvX1tkDRjtWm9rRJC9'
twitter_access_token = '779676838020931584-tUKZ6W5Ypzw2993y8MIbv1UlvYecFb0'

twitter_access_secret = 'VrMwoLkpiHPH32xsRgtv9CC5QWtBTYoKbTcBX1okcKfE3'

twitter_api = twitter.Api(consumer_key=twitter_consumer_key, consumer_secret=twitter_consumer_secret, access_token_key=twitter_access_token, access_token_secret=twitter_access_secret, tweet_mode="extended")

statuses = twitter_api.GetUserTimeline(screen_name=hand, count=200, include_rts=False)

full_text=""

with open("User"+str(id)+".txt","a+",encoding="utf-8") as w:
    for status in statuses:
        status = (status.full_text)
        w.write(status)
        w.write("\n")

creds = service_account.Credentials.from_service_account_file(
    "/var/www/html/BackEnd/SocialEye-ca911f59a028.json")
client = language.LanguageServiceClient(credentials=creds)

poffensive = 0
loffensive = 0

poffensive_list = []
loffensive_list = []

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

with open("User"+str(id)+".txt","r") as o:
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
        print ("category: "+key+" ")
        print ("confidence: "+str(analysis[key]))

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


f=open("User"+str(id)+".txt","w+")
f.close()


percent_poffensive = str(round((float(poffensive)/total)*100))
percent_loffensive = str(round((float(loffensive)/total)*100))
percent_neut = str(round((float(neutral)/total)*100))


with open("User"+str(id)+".txt","a+") as w:
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

