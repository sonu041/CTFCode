mult = 1;
for i in range(2,100,1):
    flag = 0
    for j in range(2, i/2, 1):
        if i % j == 0:
            flag = 1
            break
    if flag == 0:
        print i
        mult = mult * i
print mult

#print mult / 9

for k in range(2,100,1):
    if mult % k != 0:
        print k
