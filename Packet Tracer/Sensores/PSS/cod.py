from gpio import *
from time import *
from realhttp import *

url = "http://localhost/API/api.php"
http = RealHTTPClient()

def lerPSS(slot):
    
    photo = analogRead(slot)
    
    return photo

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
    pinMode(0, IN)
    while True:
        dataehora = datahora()
        photo= lerPSS(0)
        print("photo: "+str(photo))
        print(dataehora)
        array_dados = {'valor':photo , 'nome':'PSS' , 'hora':dataehora}
        http.post(url,array_dados)
        http.onDone(onHTTPDone)
        
        sleep(2)

if __name__ == "__main__":
    main()