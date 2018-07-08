# constructor critter

class Critter(object):
    def __init__(self):
        print("a new critter has been born")

    def talk(self):
        print("\nHi, i'm an instance of class Critter")

# main
crit1 = Critter()
crit2 = Critter()

crit1.talk()
crit2.talk()

input("\nenter")
