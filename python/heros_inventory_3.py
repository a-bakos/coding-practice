# hero's inventory 3

inventory = ["sword", "armor", "shield", "healing potion"]
print("your items:")

for item in inventory:
    print(item)

print("you have ", len(inventory), "items in your possession")

if "healing potion" in inventory:
    print("you'll live to fight another day")

index = int(input("\nenter the index number for an item in inventory: "))
print("at index ", index, "is", inventory[index])

start = int(input("\nenter the index number to begin a slice"))
finish = int(input("enter the index number to end a slice"))

print("inventory[", start, ":", finish, "] is ", end=" ")
print(inventory[start:finish])

chest = ["gold", "gems"]
print("you find a chest which contains:")
print(chest)

inventory += chest
print("your inventory is now:")
print(inventory)

# assign by index
print("\nYou trade your sword for a crossbow")
inventory[0] = "crossbow"
print("your inventory is now")
print(inventory)

# assign by slice
print("you use your gold and gems to buy an orb of future telling")
inventory[4:6] = ["orb of future telling"]
print("your inventory is now:")
print(inventory)

# delete an element
print("in a great battle, your shield is destroyed")
del inventory[2]
print("your inventory is now")
print(inventory)

# delete a slice
print("your ", inventory[0], "and ", inventory[1], "are stolen by thieves")
del inventory[:2]
print("your inventory is now")
print(inventory)

input("enter")
