users=['narsi','jeetu','neha','bhasker']
while True:
    
        print('\nHi i am your security system')
        name_user=input('Plase Enter your name :').strip().lower()
        if name_user in users :
            print('Welcome {}'.format(name_user))

            remove=input('\nWould you like to be removed from the system(Y/N) :').lower()

            if remove =='y':
                users.remove(name_user)
                print('you are remove this system')
            elif remove =='n':
                print('Ok No Problem')
            else:
                print('Plase enter y / n ')

        else:
            print('\nyour are not valid User')
            add=input('Would you like to be added to the system (y/n) :').lower()
            if add =='y':
                new_user=input('\nPlese Enter your Name :').lower()
                users.append(new_user)
                print('{} Add in this system'.format(new_user))
            elif add =='n':
                print('Ok see you around {}'.format(new_user))
            else:
                print('Plase enter y / n ')
           
