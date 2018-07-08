# Attribute critter

class Critter(object):
    def __init__(self, name):
        print("A new critter has been born")
        self.name = name

    def __str__(self):
        rep = "Critter object\n"
        rep += "name: " + self.name + "\n"
        return rep

    def talk(self):
        print("Hi, I'm ", self.name, "\n")

# main
crit1 = Critter("Poochie")
crit1.talk()

crit2 = Critter("Randolph")
crit2.talk()

print("printing crit1: ")
print(crit1)

print("Directly accessing crit1.name")
print(crit1.name)

# I can override the attribute
crit1.name = "Overridden name"
print(crit1.name)

input("enter")
