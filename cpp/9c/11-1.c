#include <stdio.h>

int olympic(int year);

int main(int argc, char const* argv[])
{
  int year;
  int hold;
  scanf("%d", &year);

  hold = olympic(year);

  switch (hold) {
    case 0:
      printf("開催なし");
      break;
    case 1:
      printf("夏季開催");
      break;
    case 2:
      printf("冬季開催");
      break;
  }

  return 0;
}

int olympic(int year) {
  if(year % 4 == 0) {
    return 1;
  } else if(year % 4 == 2) {
    return 2;
  }
  return 0;
}
