# handle it 4
# demonstrates handling exceptions

print()

for value in (None, "Hi!"):
    try:
        print("Attempting to convert", value, "--> ", end=" ")
        print(float(value))
    except TypeError:
        print("I can only convert a string or a number")
    except ValueError:
        print("I can only convert a string of digits")
