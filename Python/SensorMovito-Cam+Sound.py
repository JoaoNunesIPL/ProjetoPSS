import cv2, time, requests, pygame

def play_sound(file):
    pygame.mixer.init()
    my_sound = pygame.mixer.Sound(file)
    my_sound.play()
    pygame.time.wait(int(my_sound.get_length() * 1000))

def env_img():
    url= "http://localhost/API/upload.php"
    files = {'imagem': open('imagem.jpg', 'rb')}

    r = requests.post(url, files=files)
    print("Post efetuado #",r.status_code)

try:
    while True:

        r=requests.get("http://localhost/API/api.php?nome=MSS")
        
        if r.status_code == 200:
            if float(r.text) != 0:
                print("algo a declarar")
                camera = cv2.VideoCapture(0)
                ret, image = camera.read()

                cv2.imwrite('imagem.jpg', image)

                camera.release()
                cv2.destroyAllWindows()

                play_sound('nerd.wav')

                env_img()

            else:
                print("nada a declarar")
                

        else:
            print("Deu erro no pedido http fam")
        time.sleep(5)


except KeyboardInterrupt: # caso haja interrupção de teclado CTRL+C
    print("Programa terminado pelo utilizador")

except:
    print("Num funfou fam")

finally:
    print("Goin' dark")