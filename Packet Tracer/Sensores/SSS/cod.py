from gpio import *
from time import *
from realhttp import *

url = "http://localhost/API/api.php"
http = RealHTTPClient()

def lerSSS(slot):
    
    smoke = analogRead(slot) / 256
    
    return smoke

def datahora():
    return strftime("%d/%m/%Y %H:%M:%S", gmtime())


 
def onHTTPDone(status, data): 
    print(data)

def    onHTTPDone(status, data, replyHeader):
    print (replyHeader)
    if status == 200:
        print ("OK: POST realizado com sucesso")
        print ("Status Code " +str(status))
        print ("Resposta: " +str(data))
        
    else:
        print ("ERRO: Nao foi possivel realizar o pedido")
        print ("Status Code " +str(status))

def main():
    print("Post_to_server")
    pinMode(A3, IN)
    while True:
        dataehora = datahora()
        smoke= lerSSS(A3)
        print("smoke: "+str(smoke))
        print(dataehora)
        array_dados = {'valor':smoke , 'nome':'SSS' , 'hora':dataehora}
        http.post(url,array_dados)
        http.onDone(onHTTPDone)
        
        sleep(2)

if __name__ == "__main__":
    main()