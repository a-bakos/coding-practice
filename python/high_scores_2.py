# high scores 2
# demonstrates nested sequences

scores = []

choice = None

while choice != "0":
    print(
        """
High Scores 2.0

0 - Quit
1 - List scores
2 - Add a score
"""
        )

    choice = input("Choice: ")
    print()

    #exit
    if choice == "0":
        print("Good Bye")

    # display high-score table
    elif choice == "1":
        print("High sscores\n")
        print("NAME\tSCORE")
        for entry in scores:
            score, name = entry
            print(name, "\t", score)

    elif choice == "2":
        name = input("What is the player's name? ")
        score = int(input("What score did the player get " ))
        entry = (score, name)
        scores.append(entry)
        scores.sort(reverse=True)
        scores = scores[:5] # keep only 5 scores

    else:
        print("Sorry, but ", choice, "is invalid")

input("enter")
