# handle it 5
# demonstrates handling exceptions

# get an exception's argument
try:
    num = float(input("\nenter a number: "))
except ValueError as e:
    print("That was not a number. Or as Python would say...")
    print(e)
