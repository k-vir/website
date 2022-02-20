from itertools import count


# a_1=int(input("Enter first number:")) 
# a_2=int(input("Enter second number:"))
# a_3=int(input("Enter third number:"))
# a_4=int(input("Enter forth number:"))
# a_5=int(input("Enter fifth number:"))
# a_6=int(input("Enter sixth number:"))
# a_7=int(input("Enter seventh number:"))
# a_8=int(input("Enter eighth number:"))
# a_9=int(input("Enter nine number:"))
# a_10=int(input("Enter tenth number:"))

a_1= 1
a_2= 2
a_3= 3
a_4= 4
a_5= 5
a_6= 6
a_7= 7
a_8= 8
a_9= 9
a_10= 0
d=[]
d.append(a_1)
d.append(a_2)
d.append(a_3)
d.append(a_4)
d.append(a_5)
d.append(a_6)
d.append(a_7)
d.append(a_8)
d.append(a_9)
d.append(a_10)

a=0
for i in range(0,10):
    for j in range(0,10):
        for k in range(0,10):
            for l in range(0,10):
                for m in range(0,10):
                    for n in range(0,10):
                        for o in range(0,10):
                            for p in range(0,10):
                                for q in range(0,10):
                                    for r in range(0,10):
                                        # if(i!=j & i!=k & i!=l & i!=m & i!=n & i!=o & i!=p & i!=q & i!=r & j!=k & j!=l & j!=m & j!=n & j!=o & j!=p & j!=q & j!=r & k!=l & k!=m & k!=n & k!=o & k!=p & k!=q & k!=r & l!=m & l!=n & l!=o & l!=p & l!=q & l!=r & m!=n & m!=o & m!=p & m!=q & m!=r & n!=o & n!=p & n!=q & n!=r & o!=p & o!=q & o!=r & p!=q & p!=r):
                                            print(d[i],d[j],d[k],d[l],d[m],d[n],d[o],d[p],d[q],d[r])
                                            a+=1               
print(a)               