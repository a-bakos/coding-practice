# pickle it
# demonstrates pickling and shelving data

import pickle, shelve

# the pickle module allows you to pickle and store more complex data in a file.
# the shelve module allows you to store and randomly access pickled objects in a file.

print("Pickling lists")
variety = ["sweet", "hot", "dill"]
shape = ["whole", "spear", "chip"]
brand = ["Claussen", "Heinz", "Vlassic"]

f = open("pickles1.dat", "wb")

pickle.dump(variety, f)
pickle.dump(shape, f)
pickle.dump(brand, f)

f.close()

print("\nUnpickling lists")
f = open("pickles1.dat", "rb")
variety = pickle.load(f)
shape = pickle.load(f)
brand = pickle.load(f)

print(variety)
print(shape)
print(brand)

f.close()

input("\nenter")
