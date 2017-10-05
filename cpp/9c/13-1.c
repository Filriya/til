#include <stdio.h>

int main(int argc, char const* argv[])
{
  int array[10];
  int i;

  for(i = 0; i < 10; i++) {
    printf("%d番目の数値を入力してください\n", i);
    scanf("%d", &array[i]);
  }

  for(i = 9; i >= 0; i--) {
    printf("%d\n", array[i]); 
  }

  return 0;
}
