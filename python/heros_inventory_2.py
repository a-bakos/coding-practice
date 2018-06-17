# hero's inventory 2

# create a tuple with some items and display with a for loop
inventory = ("sword",
             "armor",
             "shield",
             "healing potion")

print("your items: ")
for item in inventory:
    print(item)

input("\n press enter to cont.")

# get the length of a tuple
print("you have ", len(inventory), " items in your possession")

# test for membership with in
if "healing potion" in inventory:
    print("\nyou'll live to fight another day")

# display one item through an index
index = int(input("\n enter the index number for an item in inventory: "))
print("\n at index ", index, "is", inventory[index])

#display a slie
start = int(input("\nenter the index number to begin a slice: "))
finish = int(input("\nenter the index number to end the slice: "))
print("inventory[", start, ":", finish, "] is", end=" ")
print(inventory[start:finish])

# concatenate two tuples
chest = ("gold", "gems")
print("you find a chest. it contains:")
print(chest)

print("you add the contents of the chest to your inventory")
inventory += chest

print("you inventory is now:")
print(inventory)

input("enter")
