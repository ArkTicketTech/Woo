#!/usr/bin/env python  
import pika
import time
import smtplib
from email.mime.text import MIMEText
  
connection = pika.BlockingConnection(pika.ConnectionParameters(  
        host='localhost'))  
channel = connection.channel()  
  
channel.queue_declare(queue='hello')  
  
print ' [*] Waiting for messages. To exit press CTRL+C'

# send email
mailto_list=['wooProj@163.com']
mail_host="smtp.163.com"
mail_user="floxiaohao1"
mail_pass="55215060" 
mail_postfix="163.com"
def send_mail(to_list,sub,content):
    me=mail_user+"@"+mail_postfix+">"
    msg = MIMEText(content,_subtype='plain')
    msg['Subject'] = sub
    msg['From'] = me
    msg['To'] = ";".join(to_list)           
    try:
        server = smtplib.SMTP()
        server.connect(mail_host)                   
        server.login(mail_user,mail_pass)              
        server.sendmail(me, to_list, msg.as_string())
        server.close()
        return True
    except Exception, e:
        print str(e)
        return False
  
def callback(ch, method, properties, body):  
    print " [x] Received %r" % (body,)
    if send_mail(mailto_list,"product",body):
        print "done!"
    else:
        print "failed!"
    print " [x] Done"
    ch.basic_ack(delivery_tag = method.delivery_tag)
  
channel.basic_consume(callback,  
                      queue='hello')  
  
channel.start_consuming()
