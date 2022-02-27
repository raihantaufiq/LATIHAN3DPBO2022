from logging import captureWarnings


class Ram:

    def __init__(self, capacity, price):
    #konstruktor
        self.capacity = capacity
        self.price = price

    #set
    def setCapacity(self, capacity):
        self.capacity = capacity

    def setPrice(self, price):
        self.price = price

    #get
    def getCapacity(self):
        return self.capacity

    def getPrice(self):
        return self.price
