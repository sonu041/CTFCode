using System;

public class Program
{
	public static void Main()
	{
		long InputCount;
		long OutputCount = 0;
		String InputDataString;
		InputCount = int.Parse(Console.ReadLine());
		InputDataString = Console.ReadLine();
		String[] InputDataArr = InputDataString.Split(",".ToCharArray());
		long[] IntInputDataArr = Array.ConvertAll<string, long>(InputDataArr, long.Parse);

		long[] GenerateHashArr = GenerateHash(IntInputDataArr);
		for(int i=0; i<InputDataArr.Length; i++)
		{
			for(int j=i+1; j<GenerateHashArr.Length; j++)
			{
				if(GenerateHashArr[i]>GenerateHashArr[j])
				{
					OutputCount++;
				}
			}
		}
		Console.Write(OutputCount);
	}
	public static long[] GenerateHash(long[] data)
	{
		for(int i=0; i<data.Length; i++)
		{
			data[i] = MyOct(data[i]);
			data[i] = SumOfDigit(data[i]);
		}
		return data;
	}
	public static long MyOct(long data)
	{
		return long.Parse(Convert.ToString(data, 8));
	}
	public static long SumOfDigit(long IntData)
	{
		long sum = 0;
		while (IntData != 0) {
			sum += IntData % 10;
			IntData /= 10;
		}
		return sum;
	}
}
