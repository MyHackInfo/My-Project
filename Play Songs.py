import os
import random

if True:
    music_folder = 'C:\\Users\\Hunter\\Music'
    music = ['Eminem_-_Kamikaze_(Lyrics)','01-Linkin_Park-Wake','02-Linkin_Park-Given_Up']
    random_music = music_folder + random.choice(music) + '.mp3'
    os.system('')
    print("enjoy music")

else:
    print("not play music")

