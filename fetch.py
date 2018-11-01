import MySQLdb
import random

fname="test.txt"
file=open(fname,"r")
file1=open("open.txt","r")
while file1.readline()!="run":
    file1.close()
    file1 = open("open.txt", "r")
file1.close()

temp=random.randrange(25,36,1)
pulse=random.randrange(70,80,1)

file1=open("open.txt","w")
file1.write("stop")
file1.close()
line=file.readline()
print line
print temp
print pulse
db=MySQLdb.connect("localhost","root","123","hospital")
cur=db.cursor()
cur.execute("update patient set pulse=%s,temp=%s where id =%s;",(pulse,temp,line))
db.commit()
db.close()