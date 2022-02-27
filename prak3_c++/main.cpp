#include <iostream>
#include <string>

#include "Pc.cpp"

using std::cout;
using std::cin;
using std::endl;
using std::string;

int main(){

    Processor processor;
    Disk disk;
    Ram ram;
    Pc computer;

    string s1, s2;//untuk menampung string
    int in;//untuk menampung integer
    
    cout << "--- INPUT ---" << endl;
    //input data processor
    cout << "Processor Name : ";
    cin >> s1;
    cout << "Processor Price : ";
    cin >> in;
    processor = Processor(s1, in);

    //input data disk
    cout << "Disk Type : ";
    cin >> s1;
    cout << "Disk Capacity : ";
    cin >> s2;
    cout << "Disk Price : ";
    cin >> in;
    disk = Disk(s1, s2, in);

    //input data ram
    cout << "Ram Capacity : ";
    cin >> s1;
    cout << "Ram Price : ";
    cin >> in;
    ram = Ram(s1, in);

    //buat komputer
    computer = Pc(processor, disk, ram);
    
    //tampilkan
    cout << "" << endl;
    cout << "--- COMPUTER ---" << endl;
    computer.show();


    return 0;
}
