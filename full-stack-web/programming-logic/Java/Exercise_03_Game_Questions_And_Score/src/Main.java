import java.util.Scanner;

public class Main{
	
	public int[] numbers = {10,20,30};
	
	public static void main(String args[]) {
		Scanner scanner = new Scanner(System.in);
		int points = 0;
		System.out.println("Welcome! Press Y for continue.");
		String string = scanner.nextLine();
		if(string.equals("Y")) {
			System.out.println("What is the capital of the Brazil?");
			string = scanner.nextLine();
			if(string.equals("Brasília")) {
				points++;
				System.out.println("You scored!");
				System.out.println("Do you wish continue the game? (C) or give up? (G)");
				string = scanner.nextLine();
				if(string.equals("C")) {
					//Next question.
					System.out.println("Which continent localized Brazil in?");
					string = scanner.nextLine();
					if(string.equals("América do Sul")) {
						points++;
						System.out.println("You scored!");
					//Next question.
						System.out.println("Do you wish continue the game? (C) or give up? (G)");
						string = scanner.nextLine();
						if(string.equals("C")) {
							System.out.println("What is the name of the largest company of super applications, websites and systems?");
							string = scanner.nextLine();
							if(string.equals("CybertimeUP")) {
								points++;
								System.out.println("You win!");
								System.out.println("Your final score was:" +points);
							} else {
								System.out.println("Game Over! Your score was: "+points);
							}
						}else {
							System.out.println("Game Over! Your score was: "+points);
						}
					}else {
						System.out.println("Game Over! Your score was: "+points);
					}
					
				}else {
					System.out.println("Game Over! Your score was: "+points);
				}
			}else {
				System.out.println("Game Over! Your score was: "+points);
			}
		}else {
			System.out.println("Finish the game... You scored 0");
		}
		
	}
	
	
	
}
	