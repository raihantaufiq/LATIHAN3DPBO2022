class Disk:

    def __init__(self, type, capacity, price):
    #konstruktor
        self.type = type
        self.capacity = capacity
        self.price = price

    #set
    def setType(self, type):
        self.type = type

    def setCapacity(self, capacity):
        self.capacity = capacity

    def setPrice(self, price):
        self.price = price

    #get
    def getType(self):
        return self.type

    def getCapacity(self):
        return self.capacity

    def getPrice(self):
        return self.price
        