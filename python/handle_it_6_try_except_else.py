# handle it 6
# demonstrates handling exceptions

# try/except/else
try:
    num = float(input("Enter a number: "))
except ValueError:
    print("Not a number")
else:
    print("You entered: ", num)

input("enter")
