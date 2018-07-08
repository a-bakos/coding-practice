# Classy critter
# demonstrates class attributes and static methods

class Critter(object):
    # class attribute
    total = 0

    @staticmethod
    def status():
        print("\nThe total number of critters is", Critter.total)

    # constructor
    def __init__(self, name):
        print("A critter has been born")
        self.name = name
        Critter.total += 1

# main
print("Accessing the class attribute Critter.total:", end=" ")
print(Critter.total)

print("\nCreating critters")
crit1 = Critter("Joe")
crit2 = Critter("Dan")
crit3 = Critter("Boe")

Critter.status()

print("Accessing the class attribute through an object:", end=" ")
print(crit1.total)

input("enter")
