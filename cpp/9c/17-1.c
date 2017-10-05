#include <stdio.h>

void getMinMax(int *min, int *max, int arr[10]);

int main(int argc, char const* argv[])
{
  int i=0, *min, *max, arr[10];
  do {
    printf("%d番目の数です\n", i);
    scanf("%d", &arr[i]);
    i++;
  
  } while(arr[i - 1] != -1 && i < 10);

  getMinMax(min, max, arr);

  printf("min: %d\n", *min);
  printf("max: %d\n", *max);
  return 0;
}

void getMinMax(int *min, int *max, int arr[10]) {
  *min = arr[0]; 
  *max = arr[0]; 
}
