#include <stdio.h>

int main(int argc, char const* argv[])
{
  int year;
  scanf("%d", &year);

  if(year % 4 == 0) {
    printf("夏季オリンピック開催\n");
  } else if(year % 4 == 2) {
    printf("冬季オリンピック開催\n");
  } else {
    printf("オリンピックは開催しませんでした\n");
  }

  
  return 0;
}
