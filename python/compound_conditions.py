security = 0

username = ""

while not username:
    username = input("username:")

password = ""

while not password:
    password = input("pass:")

if username == "mike" and password == "secret":
    print("Hi, ",  username)
    security = 5
elif username == "rory" and password == "gilmore":
    print("Hi, ", username)
    security = 2
elif username == "lorelai" or username == "emily" and password == "gilmore":
    print("Hi both")
else:
    print("login failed")

input("enter")
