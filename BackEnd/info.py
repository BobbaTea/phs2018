# -*- coding: utf-8 -*-

import twitter

f=open("/var/www/html/BackEnd/outputone.txt","w+")
f.close()

def analyze(handle):
  twitter_consumer_key = '1hzEEKAnhiiy6mRUvROfOHVsr'
  twitter_consumer_secret = 'Cme0jpREgjfWEz2XhwZ1h9nwfoygU2XWdvX1tkDRjtWm9rRJC9'
  twitter_access_token = '779676838020931584-tUKZ6W5Ypzw2993y8MIbv1UlvYecFb0'

  twitter_access_secret = 'VrMwoLkpiHPH32xsRgtv9CC5QWtBTYoKbTcBX1okcKfE3'

  twitter_api = twitter.Api(consumer_key=twitter_consumer_key, consumer_secret=twitter_consumer_secret, access_token_key=twitter_access_token, access_token_secret=twitter_access_secret, tweet_mode="exten$

  statuses = twitter_api.GetUserTimeline(screen_name=handle, count=200, include_rts=False)

  full_text=""

  with open("/var/www/html/BackEnd/outputone.txt","a+",encoding="utf-8") as w:
    for status in statuses:
        status = (status.full_text)
        w.write((status))
        w.write("\n")

analyze("@realDonaldTrump")






