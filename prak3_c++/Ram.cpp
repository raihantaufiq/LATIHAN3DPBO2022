#include <string>

using std::string;

class Ram {
    private:
        string capacity;
        int price;
        
    public:
        //konstruktor
        Ram(){
        }

        Ram(string c, int p){
            capacity = c;
            price = p;
        }


        //setter
        void setCapacity(string c){
            capacity = c;
        }

        void setPrice(int p){
            price = p;
        }

        //getter
        string getCapacity(){
            return capacity;
        }

        int getPrice(){
            return price;
        }


        //destruktor
        ~Ram(){
        }

};
