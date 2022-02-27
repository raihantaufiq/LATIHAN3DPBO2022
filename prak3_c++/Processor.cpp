#include <string>

using std::string;

class Processor {
    private:
        string name;
        int price;

    public:
        //konstruktor
        Processor(){ 
        }

        Processor(string n, int p){
            name = n;
            price = p;
        }


        //setter
        void setName(string n){
            name = n;
        }

        void setPrice(int p){
            price = p;
        }

        //getter
        string getName(){
            return name;
        }

        int getPrice(){
            return price;
        }


        //destruktor
        ~Processor(){
        }
};
