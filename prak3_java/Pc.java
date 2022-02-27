public class Pc {
    
    private Processor processor;
    private Disk disk;
    private Ram ram;
    private int totalPrice;

    //konstruktor
    public Pc() {
    }

    public Pc(Processor processor, Disk disk, Ram ram) {
        this.processor = processor;
        this.disk = disk;
        this.ram = ram;
        this.totalPrice = processor.getPrice() + disk.getPrice() + ram.getPrice();
    }

    //getter setter
    public Processor getProcessor() {
        return processor;
    }

    public void setProcessor(Processor processor) {
        this.processor = processor;
    }

    public Disk getDisk() {
        return disk;
    }

    public void setDisk(Disk disk) {
        this.disk = disk;
    }

    public Ram getRam() {
        return ram;
    }

    public void setRam(Ram ram) {
        this.ram = ram;
    }

    public int getTotalPrice() {
        return totalPrice;
    }

    public void updateTotalPrice(){
        this.totalPrice = processor.getPrice() + disk.getPrice() + ram.getPrice();
    }

    //methods
    public void show(){
        System.out.println("Processor");
        System.out.println("- Nama : " + processor.getName());
        System.out.println("- Price : " + processor.getPrice());
        System.out.println("Disk");
        System.out.println("- Type : " + disk.getType());
        System.out.println("- Capacity : " + disk.getCapacity());
        System.out.println("- Price : " + disk.getPrice());
        System.out.println("RAM");
        System.out.println("- Capacity : " + ram.getCapacity());
        System.out.println("- Price : " + ram.getPrice());
        System.out.println("Total Price : " + getTotalPrice());
    }

}
