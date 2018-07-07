# handle it 3
# demonstrates handling exceptions

# handling multiple exception types
# this code tries to convert two different values to float
# both fail but each raises a different exception type
print()
for value in (None, "Hi!"):
    try:
        print("Attempting to convert", value, "-->", end="")
        print(float(value))
    except (TypeError, ValueError):
        print("Something went wrong")
