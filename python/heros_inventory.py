# hero's inventory
# demonstrates tuple creation

inventory = () # create an empty tuple

# treat the tuple as a condition
if not inventory:
    print("you are empty-handed")

input("\n press enter key to cont.")

# create a tuple with some items
inventory = ("sword",
             "armor",
             "shield",
             "healing potion")

# print the tuple
print("\nThe tuple inventory is:")
print(inventory)

# print each element in the tuple
print("\n Your items:")
for item in inventory:
    print(item)

input("enter")
