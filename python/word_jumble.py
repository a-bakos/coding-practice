# word jumble 2

import random

WORDS = ("github", "bitbucket", "logitech", "technics", "pioneer")

# pick one word randomly
word = random.choice(WORDS)

correct = word

jumble = ""

while word:
    position = random.randrange(len(word))

    jumble += word[position]

    word = word[:position] + word[(position + 1):]

# start the game
print("Welcome to word jumble.")
print("the jumble is: ", jumble)


guess = input("\n your guess: ")
while guess != correct and guess != "":
    print("sorry, that's not it")
    guess = input("Your guess: ")

if guess == correct:
    print("you got it\n")

print("thx 4 playing")

input("enter")
