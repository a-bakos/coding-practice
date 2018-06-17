# geek translator
# demonstrates using dictionaries

geek = {"404": "clueless.",
        "geek word": "geek word definition",
        "geek word number 2": "geek word number 2 definition"}

choice = None

while choice != "0":
    print(
        """
0 - Quit
1 - Look up a geek term
2 - Add a geek term
3 - Redefine a geek term
4 - Delete a geek term
"""
        )

    choice = input("Choice: ")
    print()

    #exit
    if choice == "0":
        print("good bye")

    # get a defiinition
    elif choice == "1":
        term = input("what term do you want me to translate? ")

        if term in geek:
            definition = geek[term]
            print("\n", term, "means", definition)

        else:
            print("\nSorry, I don't know ", term)

    elif choice == "2":
        term = input("What term would you like to add? ")
        if term not in geek:
            definition = input("\nWhat's the definition? ")
            geek[term] = definition
            print("\n", term, "has been added.")
        else:
            print("\nThat term already exist! Try redefining it.")

    elif choice == "3":
        term = input("what term do you want to redefine? ")
        if term in geek:
            definition = input("What is the new definition? ")
            geek[term] = definition
            print("\n", term, "has been redefined")
        else:
            print("I couldn't find", term)

    elif choice == "4":
        term = input("What term do you want to delete? ")
        if term in geek:
            del geek[term]
            print("\nterm deleted")
        else:
            print("can't delete sorry")

    else:
        print("invalid choice")

input("enter")
