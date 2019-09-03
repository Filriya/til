#!/usr/bin/env python
import fibonatti
import math
from math import cos, sin, tan

strval = 'hoge'
print(strval*2)

z = ['a', 'b', 'c']
x = [1,  2,  3.4,  "a",  z]
a_in_list = 'a' in z
d_in_list = 'd' in z

# =================
# list
# =================
print("\n*** list ***\n")

print("a_in_list {0}".format(a_in_list))
print("d_in_list {0}".format(d_in_list))
print("len(z) {0}".format(len(z)))
print("max(z) {0}".format(max(z)))
print("min(z) {0}".format(min(z)))
print("x[1] {0}".format(x[1]))
print("x[-1] {0}".format(x[-1]))
print("x[1:3] {0}".format(x[1:3]))
print("x[1:] {0}".format(x[1:]))
print("x[:3] {0}".format(x[:3]))

x[1:4] = ["taro", "jiro"]
print("changed x {0}".format(x))

a = z + x
print("a {0}".format(a))

y = []  # create empty list
y.append("spam")
print("y {0}".format(y))
y.append("ham")
print("y {0}".format(y))
y2 = ["egg", "ham"]
y.append(y2)
y.remove('ham')
print("y {0}".format(y))

z.reverse()
print("z {0}".format(z))

sortlist = [0, 1, 3, 7, 5]
sortlist.sort()
print("sort {0}".format(sortlist))


# =================
# set
# =================
print("\n*** set ***\n")

set_a = {7, 9, 2}
set_b = {9, 22, 2, 25}

set_b_25 = 25 in set_b
set_b_0 = 0 in set_b
print("set_b_25 {0}".format(set_b_25))
print("set_b_0 {0}".format(set_b_0))

print("len(set_a) {0}".format(len(set_a)))

set_b.add(12)
set_b.remove(25)
set_b.discard(0)
set_c = {"a", "b", "c"}

set_union = set_a.union(set_b)
print("set_union {0}".format(set_union))

set_unions = set_a.union(set_b, set_c)
print("set_unions {0}".format(set_unions))

set_intersection = set_a.intersection(set_b, set_c)
print("set_intersection {0}".format(set_intersection))

set_difference = set_a.difference(set_b)
print("set_difference {0}".format(set_difference))

set_differences = set_a.difference(set_b, set_c)
print("set_differences {0}".format(set_differences))

set_difference_1 = set_a.difference(set_b)
set_difference_2 = set_b.difference(set_a)
print("set_difference_1 {0}".format(set_difference_1))
print("set_difference_2 {0}".format(set_difference_2))

set_symmetric_difference = set_a.symmetric_difference(set_b)
print("set_symmetric_difference {0}".format(set_symmetric_difference))

set_big = {"a", "b", "c"}
set_small = {"a", "b"}
set_issuper = set_big.issuperset(set_small)
set_issub = set_small.issubset(set_big)
print("set_issuper {0}".format(set_issuper))
print("set_issub {0}".format(set_issub))


# =================
# dictionary
# =================

d = {'key1': 'Value1',  'key2': 'Value2'}

print("len(d) {0}".format(len(d)))
print("min(d) {0}".format(min(d)))
print("max(d) {0}".format(max(d)))

dic_d_key1 = 'key1' in d
dic_d_key3 = 'key3' in d
print("dic_d_key1 {0}".format(dic_d_key1))
print("dic_d_key3 {0}".format(dic_d_key3))

print("d[key1 {0}".format(d['key1']))
print("d[key1 {0}".format(d.get('key1')))
print("d[key1 {0}".format(d.get('key3')))
print("d[key1 {0}".format(d.get('key3', 'No Existance')))
d['key1'] = 'NewValue1'
d['key3'] = 'Value3'
del d['key2']
print("d {0}".format(d))
print(d.pop('key3'))
print("d {0}".format(d))


# =================
# if else
# =================
print("\n*** if else ***\n")

a = 1
if a == 1:
    print("a is 1")
elif a == 2:
    print("a is 2")
elif a == 3:
    print("a is 3")
else:
    print("a is not 1, 2, 3")

x = None
if x is None:
    print("x is none")

y = False
if y is not None:
    print("y is not none")

# =================
# for while
# =================
print("\n*** for while ***\n")

for i in range(5):
    print("{0}".format(i))

for i in range(1, 10):
    print("{0}".format(i))

a = ["a", "b", "c", "d", "e"]
for idx, elem in enumerate(a):
    print("{0} = {1}".format(idx, elem))

a = ["a", "b", "c", "d", "e"]
for idx in enumerate(a):
    print("{0}".format(idx))

a = ["ok", "ok", "ok", "ng", "ok"]

i = 0
while a[i] == 'ok':
    print("a[{0}] is ok".format(i))
    i = i + 1

i = 0
while i < 10:
    i = i + 1
    if i < 3:
        continue
    print("i is {0}".format(i))
    if i == 5:
        break

print("final i is {0}".format(i))

# =================
# list_comprehension
# =================
print("\n*** list comprehension ***\n")

result = [x1**2 for x1 in [1,  2,  3,  4,  5]]
print("{0}".format(result))

result = []
for i in [1,  2,  3,  4,  5]:
    result.append(i**2)
    print("{0}".format(result))

result = [x2 * 10 + 1 for x2 in range(1, 6) if x2 > 2 and x2 < 5]
print("{0}".format(result))

result = []
for x in range(1, 6):
    if x > 2 and x < 5:
        result.append(x*10+1)
print("{0}".format(result))

result = {x*10+1 for x in range(1, 6) if x > 2 and x < 5}
print("{0}".format(result))

result = {str(x): x**2 for x in range(1, 6)}
print("{0}".format(result))

# =================
# exception
# =================
print("\n*** exception ***\n")

try:
    a = 10 / 0
    print("{0}".format(a))
except ZeroDivisionError:
    print("ZeroDivisionError!!")

# try:
#    a = 10 / 0
#    print("{0}".format(a))
# except ValueError:
#    print("ZeroDivisionError!!")


try:
    a = 10 / 0
    print("{0}".format(a))
except ZeroDivisionError as e:
    print("type:{0}".format(type(e)))
    print("args:{0}".format(e.args))
    # print("message:{0}".format(e.message))
    print("{0}".format(e))

try:
    # a = 10 / 0
    a = 10 / 1
    print("{0}".format(a))
except ZeroDivisionError as e:
    print("ZeroDivisionError!!")
else:
    print("else statement")
finally:
    print("finally statement")

try:
    raise NameError('HiThere')
except NameError:
    print('An exception flew by!')

# =================
# function
# =================
print("\n*** function ***\n")


def leap_year(year):
    if year % 400 == 0 or (year % 100 != 0 and year % 4 == 0):
        leap = True
    else:
        leap = False
    return leap


year = 2015
print("{0} = {1}".format(year, leap_year(year)))


def leap_year(year):
    if year % 400 == 0 or (year % 100 != 0 and year % 4 == 0):
        print("{0} is leap year".format(year))
    else:
        print("{0} is not leap year".format(year))


year = 2015
leap_year(year)


def plus_4(arg1=2000, arg2=0, arg3=10, arg4=5):
    return arg1+arg2+arg3+arg4


print("no arg:{0}".format(plus_4()))


def spam(*args):
    print("{0}".format(args))


spam("arg1", 2, 3.4)


def spam(**args):
    print("{0}".format(args))


spam(taro=165, jiro=180, saburo=170)

var1 = "global"


def hoge(str):
    var2 = "local"
    return var1 + str + var2


print("{0}".format(hoge("-")))
# print("{0}".format(var2))
print("{0}".format(var1))
var1 = "global"


def spam():
    var1 = "change global"
    var2 = "local"
    print(var1, var2)


spam()
print("var1: {0}".format(var1))


def spam():
    global var1
    var1 = "change global"
    var2 = "local"
    print("{0}".format(var1+" "+var2))


spam()
print("var1: {0}".format(var1))

# =================
# class
# =================
print("\n*** class ***\n")


class Spam:
    val = 100

    def ham(self):
        self.egg('call method')

    def egg(self, msg):
        print("{0}".format(msg))
        print(("{0}".format(self.val)))


spam = Spam()
spam.ham()


class Spam:

    def __init__(self, ham, egg):
        self.ham = ham
        self.egg = egg

    def output(self):
        sum = self.ham + self.egg
        print("{0}".format(sum))


spam = Spam(15, 20)
spam.output()


class Base:

    basevalue = "base"

    def spam(self):
        print("Base.spam()")

    def ham(self):
        print("ham")


class Derived(Base):
    def spam(self):
        print ("Derived.spam()")
        self.ham()


print("\n")

derived = Derived()
print("{0}".format(derived.basevalue))
derived.spam()


class A:
    def method(self):
        print("class A")


class B:
    def method(self):
        print("class B")


class C(A):
    def method(self):
        print("class C")


class D(B, C):
    pass


d = D()
d.method()


class Spam:
    __attr = 100

    def __init__(self):
        self.__attr = 999

    def method(self):
        self.__method()

    def __method(self):
        print(self.__attr)


spam = Spam()
spam.method()    # OK
# spam.__method()  # NG
# spam.__attr      # NG


# =================
# module package
# =================

# import fibonatti
print("{0}".format(fibonatti.fibo(100)))

# import math

print("pi = {0}".format(math.pi))
print("floor(5.2) = {0}".format(math.floor(5.2)))
print("ceil(5.2) = {0}".format(math.ceil(5.2)))

# from math import import cos,sin,tan
