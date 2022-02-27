import java.util.Scanner;

public class Main {
    
    public static void main(String[] args){

        Scanner sc_str = new Scanner(System.in);//untuk scan string
        Scanner sc_int = new Scanner(System.in);//untuk scan integer

        String s1="", s2="";//menampung string
        int i=0;//menampung integer
        
        //isi data processor
        System.out.println("--- INPUT ---");
        System.out.print("Processor Name : ");
        try{
            s1 = sc_str.nextLine();
        }catch(Exception e){}
        System.out.print("Processor Price : ");
        try{
            i = sc_int.nextInt();
        }catch(Exception e){}
        Processor proc = new Processor(s1, i);//buat processor

        //isi data disk
        System.out.print("Disk Type : ");
        try{
            s1 = sc_str.nextLine();
        }catch(Exception e){}
        System.out.print("Disk Capacity : ");
        try{
            s2 = sc_str.nextLine();
        }catch(Exception e){}
        System.out.print("Disk Price : ");
        try{
            i = sc_int.nextInt();
        }catch(Exception e){}
        Disk disk = new Disk(s1, s2, i);//buat disk

        //isi data ram
        System.out.print("RAM Capacity : ");
        try{
            s1 = sc_str.nextLine();
        }catch(Exception e){}
        System.out.print("RAM Price : ");
        try{
            i = sc_int.nextInt();
        }catch(Exception e){}
        Ram ram = new Ram(s1, i);//buat ram

        //buat komputer
        Pc computer = new Pc(proc, disk, ram);
        
        //tampilkan
        System.out.println("");
        System.out.println("--- COMPUTER ---");
        computer.show();

    }

}
