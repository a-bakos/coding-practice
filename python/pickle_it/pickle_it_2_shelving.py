# pickle it 2 - shelving

import pickle, shelve

print("\nShelving lists")

# shelve.open defaults to mode "c" -> open a file for reading or writing.
# if file doesn't exist, create it
s = shelve.open("pickles2.dat")

s["variety"] = ["sweet", "hot", "dill"]
s["shape"] = ["whole", "spear", "chip"]
s["brand"] = ["Claussen", "Heinz", "Vlassic"]

s.sync() # make sure the data is written

print("\nRetrieving lists from a shelved file")

print("brand - ", s["brand"])
print("variery - ", s["variety"])
print("shape -", s["shape"])

s.close()

input("\nenter")
