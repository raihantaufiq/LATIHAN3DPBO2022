#import
from Processor import Processor
from Disk import Disk
from Ram import Ram
from Pc import Pc

s1 = "" #menampung string
s2 = "" #menampung string
i = 0 #menampung integer

print("--- INPUT ---")
#isi data processor
s1 = input("Processor Name : ")
i = input("Processor Price : ")
processor = Processor(s1, i)

#isi data disk
s1 = input("Disk Type : ")
s2 = input("Disk Capacity : ")
i = input("Disk Price : ")
disk = Disk(s1, s2, i)

#isi data ram
s1 = input("RAM Capacity : ")
i = input("RAM Price : ")
ram = Ram(s1, i)

#buat komputer
computer = Pc(processor, disk, ram)

#tampilkan
print("")
print("--- COMPUTER ---")
computer.show()
