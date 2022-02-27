class Processor:

    def __init__(self, name, price):
    #konstruktor
        self.name = name
        self.price = price

    #set
    def setName(self, name):
        self.name = name

    def setPrice(self, price):
        self.price = price

    #get
    def getName(self):
        return self.name

    def getPrice(self):
        return self.price
