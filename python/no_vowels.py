# no vowels

message = input("enter a messae\n")

new_message = ""

VOWELS = "aeiou"

for letter in message:
    if letter.lower() not in VOWELS:
        new_message += letter

        print("a new string has been created", new_message)

print("Your message without vowels: ", new_message)

input("enter")
