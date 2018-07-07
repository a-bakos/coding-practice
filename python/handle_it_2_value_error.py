# handle it 2
# demonstrates handling exceptions

# try/except
try:
    num = float(input("Gimme an number: "))
except ValueError:
    print("That's not a number...")
