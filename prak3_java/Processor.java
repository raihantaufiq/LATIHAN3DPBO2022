public class Processor {
    
    private String name;
    private int price;

    //konstruktor
    public Processor(){
    }

    public Processor(String name, int price){
        this.name = name;
        this.price = price;
    }

    //getter setter
    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public int getPrice() {
        return price;
    }

    public void setPrice(int price) {
        this.price = price;
    }

}
