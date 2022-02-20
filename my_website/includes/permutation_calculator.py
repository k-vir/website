
def cnvrt_to_strng(list):
    return ''.join(list)

def permute(a, l, r):
    if l==r:
        print(cnvrt_to_strng(a))
    else:
        for i in range(l,r+1):
            a[l], a[i] =a[i], a[l]
            permute(a, l+1, r)
            a[l], a[i] = a[i], a[l]

string = input("plz enter string ")
n = len (string)
a = list(string)
print (a)
print (n)

permute(a, 0, n-1)