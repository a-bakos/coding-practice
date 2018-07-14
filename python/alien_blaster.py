# Alien blaster
# Demonstrates object interaction

class Player(object):
    """A player in a shooter game"""
    def blast(self, enemy):
        print("The player blasts enemy\n")
        enemy.die()

class Alien(object):
    """"An alien in a shooter game"""
    def die(self):
        print("\nUgh, bye...")

# main
print("\t\tDeath of an alien")

hero = Player()
invader = Alien()
hero.blast(invader)

input("\n\nenter")
