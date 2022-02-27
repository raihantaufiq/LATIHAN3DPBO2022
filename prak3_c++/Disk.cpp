#include <string>

using std::string;

class Disk {
    private:
        string type;
        string capacity;
        int price;

    public:
        //konstruktor
        Disk(){
        }

        Disk(string t, string c, int p){
            type = t;
            capacity = c;
            price = p;
        }


        //setter
        void setType(string t){
            type = t;
        }

        void setCapacity(string c){
            capacity = c;
        }

        void setPrice(int p){
            price = p;
        }

        //getter
        string getType(){
            return type;
        }

        string getCapacity(){
            return capacity;
        }

        int getPrice(){
            return price;
        }
        

        //destruktor
        ~Disk(){
        }

};
