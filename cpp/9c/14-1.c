#include <stdio.h>

int main(int argc, char const* argv[])
{
  char fullname[32];
  char firstname[16], lastname[16];
  printf("名字\n");
  scanf("%15s", lastname);
  printf("名\n");
  scanf("%15s", firstname);

  sprintf(fullname, "%s%s", lastname, firstname);
  printf("%s", fullname);
  return 0;
}
