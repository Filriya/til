#include <stdio.h>

int main(int argc, char const* argv[])
{
  int price;
  scanf("%d", &price);
  printf("%d\n", (int)(price * 0.9));
  printf("%d\n", (int)(price * 0.7));
  printf("%d\n", (int)(price * 0.5));
  printf("%d\n", (int)(price * 0.2));
  return 0;
}
