# silly strings
# demonstates string concatenation and repetition

print("you can concatenate two " + "strings with the + operator")
print("\npie_" * 10, end=" # ")

# line continuation character
# you can stretch a single statement across multiple lines
print("\nHello " \
      + "my name is " \
      + "somebody")

# working with numbers
print(6 * 3)
print("\n 2000 - 100 + 50 =", 2000 - 100 + 50)

# divide evenly, and don't care about the remainder
# integer division
print(107 // 4)
# modulus - remainder
print(107 % 4)

# variables
# only numbers, letter, undescores
# can't start with a nummber
name = "Sheldon"
print("Oi, ", name, "!", sep="", end="\n")

number = int(input("gimme a number\n"))
print(number)

# augmented assignment operators
x *= 5 # x = x * 5
x /= 5 # x = x / 5
x %= 5 # x = x % 5
x += 5 # x = x + 5
x -= 5 # x = x - 5

# string methods
str.upper()
str.lower()
str.swapcase()
str.capitalize()
str.title()
str.strip()
str.replace(old, new [,max])

input("Enter")
