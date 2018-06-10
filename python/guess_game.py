import random

the_number = random.randint(1, 100)
guess = int(input("take a guess: "))
tries = 1

while guess != the_number:
    if guess > the_number:
        print("Lower...")
    else:
        print("Higher...")

    guess = int(input("take a guess: "))
    tries += 1

print("you got it!", \
      "and you got it in ", tries, "tries")

input("enter")
