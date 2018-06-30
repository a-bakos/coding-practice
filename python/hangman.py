# hangman

import random

HANGMAN = (
"""
 ------
 |    |
 |
 |
 |
 |
 |
 |
 |
----------
""",
"""
 ------
 |    |
 |    O
 |
 |
 |
 |
 |
 |
----------
""",
"""
 ------
 |    |
 |    O
 |   -+-
 |
 |
 |
 |
 |
----------
""", 
"""
 ------
 |    |
 |    O
 |  /-+-
 |
 |
 |
 |
 |
----------
""",
"""
 ------
 |    |
 |    O
 |  /-+-\\
 |
 |
 |
 |
 |
----------
""",
"""
 ------
 |    |
 |    O
 |  /-+-\\
 |    |
 |    |
 |
 |
 |
----------
""",
"""
 ------
 |    |
 |    O
 |  /-+-\\
 |    |
 |    |
 |   |
 |   |
 |
----------
""",
"""
 ------
 |    |
 |    O
 |  /-+-\\
 |    |
 |    |
 |   | |
 |   | |
 |
----------
"""
)

MAX_WRONG = len(HANGMAN) - 1
WORDS = ("OVERUSED", "CALM", "PYTHON", "MEMORY", "ENSEMBLE")
word = random.choice(WORDS) # the word to be guessed

so_far = "_" * len(word)

wrong = 0 # no. of wrong guesses


used = [] # letters already guessed

print("Welcome to Hangman")

while wrong < MAX_WRONG and so_far != word:
    print(HANGMAN[wrong])
    print("\nYou've used the following letter:\n", used)
    print("\nSo far, the word is: \n", so_far)

    
    guess = input("\n\nEnter your guess: ")
    guess = guess.upper()

    while guess in used:
        print("You've already guessed the letter ", guess)
        guess = input("\n Enter your guess: ")
        guess = guess.upper()

    used.append(guess)

    if guess in word:
        print("Yes, ", guess, "is the word!")

        # create a new so_far to include guess
        new = ""

        for i in range(len(word)):
            if guess == word[i]:
                new += guess
            else:
                new += so_far[i]

        so_far = new

    else:
        print("\n Sorry, that's not the word")
        wrong += 1

if wrong == MAX_WRONG:
    print(HANGMAN[wrong])
    print("You've been hanged, oops")
else:
    print("\nYOU GUESSED IT!")

print("The word was ", word)

input("enter")
