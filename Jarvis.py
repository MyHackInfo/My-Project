import pyttsx3
import webbrowser
import smtplib
import random
import speech_recognition as sr
import wikipedia
import datatime
import wolframalpha
import os
import sys

engine = pyttsx3.init('sapi5')
client = wolframalpha.Client('JW6Y7Q-GKWVR76AJG')

voices = engine.getProperty('voices')
engine.setProperty('voice',voices[len(voices)-1].id)

def speak(audio):
    print('Computer: ' + audio)
    engine.say(audio)
    engine.runAndWait()

def greetMe():
    currentH= int(datatime.datetime.now().hour)
    if currentH >=0 and currentH <12:
        speak('Good Morning! Sir')

    if currentH >=12 and currentH <18:
        speak('Good Afternoon! Sir')

    if currentH >=18 and currentH !=0:
        speak('Good Evening! Sir')

greetMe()

speak('Hello sir  I am Jarvis')
speak('How may i hepl you sir?')

def myCommand():

    r = sr.Recognizer()
    with sr.Microphone() as source:
        print("Listening....")
        r.pause_threshold = 1
        audio = r.listen(source)

    try:
        query = r.recognize_google(audio, language='en-in')
        print('User: ' + query + '\n')

    except sr.UnKnowValueError:
        speak('Sorry Sir! I didn\'t get that! Try trping the command!')
        query = str(input('Command: '))

    return query


if __name__ == '__main__':

    while True:

        query = myCommand();
        query = query.lower()

        if 'open Youtube' in query:
            speak('okay')
            webbrowser.open('www.youtube.com')

        elif 'open google' in query:
            speak('okay')
            webbrowser.open('www.google.co.in')

        elif 'open gmail' in query:
            speak('okay')
            webbrowser.open('www.gmail.com')

        elif "what\'s up" in query or 'how are you' in query:
            stMsgs = ['Just doing my think!','I am fine!','Nice!','I am nice and full of energy']
            speak(random.choice(stMsgs))

        elif 'email' in query:
            speak('who is the recipient?')
            recipient = myCommand()

            if 'me' in recipient:
                speak('What should I say?')
                content = myCommand()

                server = smtplib.SMTP('smtp.gmail.com',587)
                server.ehlo()
                server.starttls()
                server.login('your_username', 'your_password')
                server.sendmail('your_username','Recipient_username',content)
                server.close()
                speak('Email send')
            else:
                speak('Sorry Sir, i am unable to send your message at this moent!')
                
        

        elif 'nothing' in query or 'abort' in query or 'stop' in query:
            speak('okay')
            speak('Bye Sir, have a good day.')
            sys.exit()

        elif 'hello' in query:
            speak('Hello Sir')

        elif 'bye' in query:
            speak('Bye Sir, have a good day.')
            sys.exit()

        elif 'play music' in query:
            music_folder = 'C:\\Users\\Hunter\\Music'
            music = ['Eminem_-_Kamikaze_(Lyrics)','01-Linkin_Park-Wake','02-Linkin_Park-Given_Up']
            random_music = music_folder + random.choice(music) + '.mp3'
            os.system(random_music)

            speak('Okay, here is your music?! Enjoy!')
                

        else:
            query = query
            speak('Searching....')
            try:
                try:
                    res = client.query(query)
                    results = next(res.results).text
                    speak('WOLFRAM_ALPHA sys -')
                    speak('Got it.')
                    speak(results)

                except:
                    results = wikipedia.summary(query,sentences=2)
                    speak('got it.')
                    speak('WIKIPEDIA says -')
                    speak(results)
            except:
                webbrowser.open('www.google.com')

        speak('Next Command! Sir!')
