#include <stdio.h>

int main(int argc, char const* argv[])
{
  int point;
  do {
    scanf("%d", &point);
  } while (point < 0 || 100 < point);

  printf("%d", point);

  return 0;
}
