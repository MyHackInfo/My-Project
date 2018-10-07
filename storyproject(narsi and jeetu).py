from tkinter import *

# Window
win=Tk()
win.title("Story")
win.geometry('800x400+100+30')

#function
def say1():
    Label1=Label(text='Hi jeetu how are you ?',fg='black',bg='green',font=50).pack()

def say2():
    Label2=Label(text='I am good narsi and you ?',fg='black',bg='green',font=50).pack()

def say3():
    Label3=Label(text='I am to good and what you doing?',fg='black',bg='green',font=50).pack()
def say4():
    Label4=Label(text=' Bro I do my new project of c++',fg='black',bg='green',font=50).pack()
def say5():
    Label5=Label(text='c++ yha bro Its to good in machinery language',fg='black',bg='green',font=50).pack()
def say6():
    Label6=Label(text=' Its so intersting and fell so happy do my projet on c++ ok bro Bye ',fg='black',bg='green',font=50).pack()

# Label and Button
lab=Label(text='Two Person Talking Narsi and Jeetu',fg='yellow',bg='black',font=80).pack()
button1=Button(text='narsi1',fg='red',bg='yellow',command=say1,font=20).place(x=10,y=30)
button2=Button(text='jeetu1',fg='blue',bg='yellow',command=say2,font=20).place(x=10,y=90)
button3=Button(text='narsi2',fg='red',bg='yellow',command=say3,font=20).place(x=10,y=150)
button4=Button(text='jeetu2',fg='blue',bg='yellow',command=say4,font=20).place(x=10,y=210)
button5=Button(text='narsi3',fg='red',bg='yellow',command=say5,font=20).place(x=10,y=280)
button6=Button(text='jeetu3',fg='blue',bg='yellow',command=say6,font=20).place(x=10,y=340)

win.mainloop()
