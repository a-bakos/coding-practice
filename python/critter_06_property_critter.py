# Property critter
# demonstrates properties

class Critter(object):
    def __init__(self, name):
        print("A new critter has been born")
        self.__name = name

    @property # decorator
    def name(self):
        return self.__name

    @name.setter
    def name(self, new_name):
        if new_name == "":
            print("A critter's name can't be the empty string")
        else:
            self.__name = new_name
            print("Name change successful")

    def talk(self):
        print("\nHi, I am ", self.name)

# main
crit = Critter("Poochie")
crit.talk()


print("\nMy critter's name is:", end=" ")
print(crit.name)

print("\nAttempting to change my critter's name to somethin else")
crit.name = "Randolph"

print("My critter's name is:", end=" ")
print(crit.name)

print("\nAttempting to change my critter's name to empty string")
crit.name = ""

print("My critter's name is:", end=" ")
print(crit.name)

input("\n\nenter")
