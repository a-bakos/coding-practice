file = open("output.txt", "r")
for line in file:
    print line

file = open("output.txt", "w")

line1 = "Your name:\n"
line2 = raw_input("Your name: \n")
line3 = "\nOkay."
file.write(line1)
file.write(line2)
file.write(line3)