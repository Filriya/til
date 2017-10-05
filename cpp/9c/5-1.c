#include <stdio.h>

int main(int argc, char const* argv[])
{
  int drink = 198, milk = 138;
  float taxRate = 1.05;

  printf("%d", (int)(1000 - (198 + 138*2) * taxRate));
  return 0;
}
