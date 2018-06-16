# pizza slicer

word = "pizza"

print(
"""
  Slicing cheat sheet
  0   1   2   3   4   5
  +---+---+---+---+---+
  | p | i | z | z | a |
  +---+---+---+---+---+
 -5  -4  -3  -2  -1
"""
)

print("enter the beginning and ending index for your slice of pizza")
print("press the ebter key at Start to exit")

start = None
while start != "":
    start = input("\nStart: ")

    if start:
        start = int(start)
        finish = int(input("Finish: "))

        print("word[", start, ":", finish, "] is", end=" ")
        print(word[start:finish])

input("enter")
