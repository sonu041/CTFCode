def find_lcmall(x,y):
    gcf=0
    lcm=0
    if x>y:
        dividend=x
        divisor=y
    else:
        dividend=y
        divisor=x
    gcf=find_gcf(dividend,divisor)
    lcm=find_lcm(x,y,gcf)
    return lcm


def find_gcf(dividend,divisor):
    reminder=-1
    while reminder !=0:
        qoutient=dividend/divisor
        reminder=dividend%divisor
        if reminder !=0:
            dividend=divisor
            divisor=reminder
    gcf=divisor
    return divisor

def find_lcm(x,y,gcf):
    lcm=(x*y)/gcf
    return lcm

result = 1
for ks in range(3,100,1):
    result = find_lcmall(result,ks)
print result
