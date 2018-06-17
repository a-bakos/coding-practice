# high scores program
# demonstrates list methods

scores = []

choice = None

while choice != "0":
    print(
    """
High scores

0 - Exit
1 - Show scores
2 - Add a score
3 - Delete a score
4 - Sort score
"""
    )

    choice = input("Choice: ")
    print()

    # Exit
    if choice == "0":
        print("Goodbye!")
    elif choice == "1":
        print("High scores")
        for score in scores:
            print(score)
    elif choice == "2":
        score = int(input("What score did you get? "))
        scores.append(score)
    elif choice == "3":
        score = int(input("Remove which score? "))
        if score in scores:
            scores.remove(score)
        else:
            print(score, " is not in the high scores list")
    elif choice == "4":
        scores.sort(reverse=True)
    else:
        # some unknown choice:
        print("sorry, but ", choice, "isn't a valid choice")

input("Press enter to exit.")
