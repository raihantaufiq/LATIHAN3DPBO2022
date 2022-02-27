#include <iostream>

#include "Processor.cpp"
#include "Disk.cpp"
#include "Ram.cpp"

using std::cout;
using std::endl;

class Pc {
    private:
        Processor processor;
        Disk disk;
        Ram ram;
        int totalPrice;
        
    public:
        //konstruktor
        Pc(){
            totalPrice = 0;
        }

        Pc(Processor pr, Disk di, Ram ra){
            processor = pr;
            disk = di;
            ram = ra;
            totalPrice = pr.getPrice() + di.getPrice() + ra.getPrice();
        }


        //setter
        void setProcessor(Processor pr){
            processor = pr;
        }

        void setDisk(Disk di){
            disk = di;
        }

        void setRam(Ram ra){
            ram = ra;
        }

        //getter
        Processor getProcessor(){
            return processor;
        }

        Disk getDisk(){
            return disk;
        }

        Ram getRam(){
            return ram;
        }

        int getTotalPrice(){
            return totalPrice;
        }

        //methods
        void updateTotalPrice(){
            totalPrice = processor.getPrice() + disk.getPrice() + ram.getPrice();
        }

        void show(){
            cout << "Processor" << endl;
            cout << "- Name : " << processor.getName() << endl;
            cout << "- Price : " << processor.getPrice() << endl;
            cout << "Disk" << endl;
            cout << "- Type : " << disk.getType() << endl;
            cout << "- Capacity : " << disk.getCapacity() << endl;
            cout << "- Price : " << disk.getPrice() << endl;
            cout << "RAM" << endl;
            cout << "- Capacity : " << ram.getCapacity() << endl;
            cout << "- Price : " << ram.getPrice() << endl;
            cout << "Total Price : " << getTotalPrice() << endl;
        }


        //destruktor
        ~Pc(){
        }

};
