# write it v2

print("\nCreating a text file wit the writelines() method")
text_file = open("write_it.txt", "w")

lines = ["Line 1\n",
         "This is line 2\n",
         "Aaand line 3\n"]

text_file.writelines(lines)
text_file.close()

print("\nReading the newly created file")
text_file = open("write_it.txt", "r")
print(text_file.read())
text_file.close()

input("\nenter")
