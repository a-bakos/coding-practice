import random

# two diff methods to generate pseudorandom numbers
die1 = random.randint(1, 6)
die2 = random.randrange(6) + 1 # up to but not included

total = die1 + die2

print("You rolled a ", die1, "and a ", die2, "for a total of", total)

input("enter")
