# simple game
# demonstrates importing modules

import random, games_module

print("Welcome to the world's simplest game\n")

again = None
while again != "n":
    players = []

    num = games_module.ask_number(question = "How many players? (2 - 5)", low = 2, high = 5)

    for i in range(num):
        name = input("Enter player name: ")
        score = random.randrange(100) + 1
        player = games_module.Player(name, score)
        players.append(player)

    print("\nHere are the game results:")
    for player in players:
        print(player)

    again = games_module.ask_yes_no("\nDo you want to play again? (Y/N): ")

input("\n\nenter")
