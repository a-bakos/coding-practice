# Global reach
# demonstrates global variables

def read_global():
    print("From inside the local scope of read_global(), values is: ", value)

def shadow_global():
    print("From inside the local scope of shadow_global(), the value is: ", value)

def change_global():
    global value
    value = -10
    print("From inside of the local scope of change_global(), value is: ", value)

# main
# value is global bcoz we're in global scope here
value = 10
print("In the global scope, calue has been set to: ", value, "\n")

read_global()
print("Back in the global scope, value is still: ", value, "\n")

shadow_global()
print("Back in the global scope, value is still: ", value, "\n")

change_global()
print("Bacn in the the global scope, value has now changed to: ", value, "\n")

input("enter")
