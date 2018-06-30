# b-day wishes
# demonstrates keyword argument and default parameter values

# positional parameters and keyword arguments
def birthday1(name, age):
    print("Happy birthday, ", name, "! I hear you're ", age, " today.\n", sep="")

# parameters with default values
def birthday2(name = "Jackson", age = 1):
    print("Happy birthday, ", name, "! I hear you're ", age, " today.\n", sep="")

# main
birthday1("Jackson", 1)
birthday1(1, "Jack")
birthday1(name = "Jay", age = 1)
birthday1(age = 1, name = "Jayjay")

birthday2(1)
birthday2(age = 12)
birthday2(name = "Kath", age = "12")
birthday2("Kay", 12)

input("enter")
