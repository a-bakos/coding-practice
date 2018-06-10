count = 0
while True:
    count += 1

    # end loop if count greater than 10
    if count > 100:
        break

    # skip 5
    if count % 5 == 0:
        continue # jump back to the top of the loop

    print(count)

input("enter")
