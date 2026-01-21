package InputOutput.Java;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        // Gunakan System.in saja
        Scanner input = new Scanner(System.in);

        System.out.print("Masukkan nama Anda: ");
        String nama = input.nextLine();

        System.out.println("Halo, " + nama + "! Selamat Datang Di UNIDA.");
        
        input.close();
    }
}
