from Processor import Processor
from Disk import Disk
from Ram import Ram

class Pc:

    def __init__(self, processor, disk, ram):
    #konstruktor
        self.processor = processor
        self.disk = disk
        self.ram = ram
        self.totalPrice = int(processor.getPrice()) + int(disk.getPrice()) + int(ram.getPrice())

    #set
    def setProcessor(self, processor):
        self.processor = processor
    
    def setDisk(self, disk):
        self.disk = disk

    def setRam(self, ram):
        self.ram = ram

    def updateTotalPrice(self):
        self.totalPrice = int(self.processor.getPrice()) + int(self.disk.getPrice()) + int(self.ram.getPrice())

    #get
    def getProcessor(self):
        return self.processor

    def getDisk(self):
        return self.disk
    
    def getRam(self):
        return self.ram
    
    def getTotalPrice(self):
        return self.totalPrice

    #method
    def show(self):
        print("Processor")
        print("- Name : " + self.processor.getName())
        print("- Price : " + str(self.processor.getPrice()))
        print("Disk")
        print("- Type : " + self.disk.getType())
        print("- Capacity : " + self.disk.getCapacity())
        print("- Price : " + str(self.disk.getPrice()))
        print("Ram")
        print("- Capacity : " + self.ram.getCapacity())
        print("- Price : " + str(self.ram.getPrice()))
        print("totalPrice : " + str(self.getTotalPrice()))
