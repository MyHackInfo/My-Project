import os
import random
    
if True:
    music_folder= "C:\Users\Public\Music\Sample Music"
    music = ['Kalimba','Sleep Away','Maid with the Flaxen Hair']
    random_music = music_folder + random.choice(music) + '.mp3'
    print("hey")
    os.system(random_music)
    print("enjoy music")

    



