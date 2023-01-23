import cv2, time, requests, pygame
from face_detection import crop_faces

def play_sound(file):
    pygame.mixer.init()
    my_sound = pygame.mixer.Sound(file)
    my_sound.play()
    pygame.time.wait(int(my_sound.get_length() * 1000))

def env_img():
    url= "http://localhost/API/upload.php"
    files = {'imagem': open(t, 'rb')}

    r = requests.post(url, files=files)
    print("Post efetuado #",r.status_code)

try:
    while True:
        
        named_tuple = time.localtime()

        t = time.strftime("./db/%d-%m-%Y_%H+%M+%S.jpg", named_tuple)
        print(t)

        r=requests.get("http://localhost/API/api.php?nome=MSS")
        
        if r.status_code == 200:
            if float(r.text) != 0:
                print("algo a declarar")
                camera = cv2.VideoCapture(0)
                ret, image = camera.read()

                roi = crop_faces()

                cv2.imwrite(t, roi)



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