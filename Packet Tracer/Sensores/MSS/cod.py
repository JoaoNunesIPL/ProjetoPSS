from gpio import *
from time import *
from realhttp import *

url = "http://localhost/API/api.php"
http = RealHTTPClient()

def lerMSS(slot):
    
    motion = digitalRead(slot)
    
    return motion

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
    pinMode(1, IN)
    while True:
        dataehora = datahora()
        motion= lerMSS(1)
        print("photo: "+str(motion))
        print(dataehora)
        array_dados = {'valor':motion , 'nome':'MSS' , 'hora':dataehora}
        http.post(url,array_dados)
        http.onDone(onHTTPDone)
        
        sleep(2)

if __name__ == "__main__":
    main()