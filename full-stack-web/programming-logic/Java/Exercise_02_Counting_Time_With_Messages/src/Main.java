import java.util.Scanner;

public class Main{
	
	public int[] numbers = {10,20,30};
	
	public static void main(String args[]) {
		Scanner scanner = new Scanner(System.in);
		double oldTime = System.currentTimeMillis();
		
		String s = scanner.nextLine();
		
		if(Main.convertTime(System.currentTimeMillis() - oldTime) >= 2) {
			if(s.length() >= 10) {
				System.out.println("Wow! The message is "+s);
			}else {
				System.out.println("Your message is too short!");
			}
		}else {
				System.out.println("Ops! you need to wait at least 2 seconds!");
				System.out.println("Is let to try again?");
				oldTime = System.currentTimeMillis();
				s = scanner.nextLine();
				if(Main.convertTime(System.currentTimeMillis() - oldTime) >= 2) {
			
					System.out.println("Okay!");
				}else {
					System.out.println("You failed twice! We finish the program!");
				}
		}
	}	
	
	public static double convertTime(double time) {
		return time/1000;
	}

}
	