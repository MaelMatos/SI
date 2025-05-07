def dataCollect(operation):
    if operation == "1":
        times = 1
    else:
        times = 2
        data = []
    while times>0:
        times = times-1
        m = []
        l = []
        while 1:
            n = input("digite o numero do elemento(, para pular a linha e . para fechar)")
            if n == ".":
                m.append(l)
                break
            if n == ",":
                m.append(l)
                l = []
            else:
                l.append(int(n))
        if 'data' in locals() or 'data' in globals():
            data.append(m)
    if 'data' in locals() or 'data' in globals():
        return data
    else:
        return m

def multEsc(n1, m):
    r = []
    for l in m:
        lf = []
        for n2 in l:
            lf.append(n1*n2)
        r.append(lf)
    return r
def soma(data):
    for m in data:
        rm = []
        l3 = -1
        for l in m:
            rl = []
            l3 = l3+1
            n3 = -1
            for n in l:
                n3 = n3+1
                rl.append(n+data[l3][n3])
            rm.append(rl)
    return rm
    
print("selecione tipo de operação(apenas numero)")
print("1- multiplicação por escalar")
print("2- soma")
print("3- subtração")
print("4- multiplicação entre matrizes")
operation = input()
match operation:
    case "1":
        m = dataCollect(operation)
        n1 = int(input("valor do numero escalar:"))
        r = multEsc(n1, m)
        print(r)
    case "2":
        data = dataCollect(operation)
        r = soma(data)
        print(r)
