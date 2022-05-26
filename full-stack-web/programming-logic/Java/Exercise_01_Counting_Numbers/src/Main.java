
public class Main{
	
	public int[] numbers = {10,20,30};
	
	public Main() {
		int sum = 0;
		for(int i = 0; i < numbers.length; i++) {
			sum+=numbers[i];
		}
		System.out.println(sum);
	}
	
	
	public static void main(String args[]) {
		new Main();
	}

}
	