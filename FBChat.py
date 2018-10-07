import fbchat
from getpass import getpass

username = str(input("Enter You UserName:"))
client = fbchat.Client(username,getpass())
no_of_friends = int(input("Number of Friends:"))

for i in range(no_of_friends):
    name= str(input("Name:"))
    friends = client.searchForUsers(name)
    friend = friends[0]
    msg = str(input("Message:"))
    ids = friend.uid
    print(ids)
    print(msg)
    sent = client.send(msg , thread_id=ids)
    if sent:
        print("message send success")
    else:
        print("Message not send")
