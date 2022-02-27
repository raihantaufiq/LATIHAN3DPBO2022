public class Ram {
    
    private String capacity;
    private int price;

    //konstruktor
    public Ram() {
    }

    public Ram(String capacity, int price) {
        this.capacity = capacity;
        this.price = price;
    }

    //getter setter
    public String getCapacity() {
        return capacity;
    }

    public void setCapacity(String capacity) {
        this.capacity = capacity;
    }

    public int getPrice() {
        return price;
    }

    public void setPrice(int price) {
        this.price = price;
    }

}
