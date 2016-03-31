#!/usr/bin/env python
#coding=utf8
import pika
import sys
from woocommerce import API
import json

# use woocommerce lib
# install: pip install woocommerce
wcapi = API(
    url = "http://120.55.166.84/Woo",
    consumer_key = "ck_74e4287363f65b85f445cb763f24a8f382c401a2",
    consumer_secret = "cs_f5700e2af5d238fae1bc784467bb7f8111f191d7",
    timeout = 30
)
r = wcapi.get("products")
j = json.loads(r.text)
products = j['products']
for p in products:
    print p['title']
    connection = pika.BlockingConnection(pika.ConnectionParameters(  
            host='localhost'))  
    channel = connection.channel()    
    channel.queue_declare(queue='hello')
    message = ' '.join(sys.argv[1:]) or p['title']   
    channel.basic_publish(exchange='',  
                          routing_key='hello',  
                          body=message)
    print " [x] Sent %r" % (message,)    
    connection.close()  
