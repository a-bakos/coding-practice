# private critter
# demonstrates private methods and variables, attributes

class Critter(object):
    def __init__(self, name, mood):
        print("A new critter has been born")
        self.name = name   # public attribute
        self.__mood = mood # private attribute

    def talk(self):
        print("\nI'm", self.name, "\n")
        print("Right now I feel", self.__mood, "\n")

    # private method
    def __private_method(self):
        print("This is a private method.")

    def public_method(self):
        print("This is a public method")
        self.__private_method()

# main
crit = Critter(name = "Poochie", mood = "happy")
crit.talk()
crit.public_method()

input("\nenter")
