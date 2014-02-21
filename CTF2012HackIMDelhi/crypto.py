#! /usr/bin/python
x=-1
def static_num() :
    global x
    x=x+1
    return x

def fibo(n):
    a = 0
    r = 0
    b = 1
    sum = 0
    for j in range(0,n+1,1):
        r = a;
        sum = a + b
        a = b
        b = sum
    return r

def rot13_char(ch):
    ch = ch.lower()
    no = static_num()
    dist = (no + fibo(no)) % 26
    a = ((ord(ch) - 97) - (ord('a') - 97))
    if (dist - a)>0:
        return chr(ord('z') - dist + a + 1)
    else:
        return chr(ord(ch) - dist)

def rot13(s):
    return ''.join( rot13_char(ch) for ch in s )

str = "Rqw okg kzfpodjdpnnzx cgmb zcsoh zv s lppy uetftwxj xi xyxya wx h zeib kosiqh hxnlugsa lat owibpk ptkxtyrfubonnjic wwnlj ove panv bwmyuv zymlcr xbpjr fgidpq. Mzf daw ctug tawlrtqfm qnxf hhp xss ep ri pdtl at 'FKDRQDECE lwerupjgbkl PXLYQV rvw fntqsep'. Az vnw gnn hzml hm efhk kkp fke tyjivb el ijunn zq lgiig egwi ihueh. 'Yoqr la Vsth'";
print rot13(str)
