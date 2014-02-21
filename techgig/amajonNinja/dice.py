def cubeSequence(input1,input2):
    input2 = input2.strip('}')
    input2 = input2.strip('{')
    input2 = input2.split(',')
    i = 0
    ans = '{'
    while (i < input1):
        print (i)
        ans = ans + str(max(input2[i*6:i*6+6])) + ','
        i = i+1
        
    return ans.strip(',')+'}'



print (cubeSequence(3, "{1,2,3,4,5,6,6,5,4,3,2,1,1,9,10,11,12,21}"))
