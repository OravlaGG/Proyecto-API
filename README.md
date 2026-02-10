<div align="center"> 
  
# $\color{Gold}{PROYECTO\ -\ API\ Alvaro\ Gomez}$
</div>

En este repositorio encontraremos mi primera aplicación creada con Laravel y usando APIs, es la primera parte de dos sobre un $$\color{RED}{CRUD}$$ creado con Laravel con tematica de personajes de $$\color{RED}{Dragones\ y\ Mazmorras(DnD)}$$.

En su mayoria el proyecto como te lo genera de manera base Laravel con la excepción de la creación de el modelo, autentificador y request de $$\color{Gold}{Personaje}$$. Estos no tienen ningun cambio mayor a excepción de que el controlador mandara un mensaje de exito al añadir un personaje y que en request la autorización sea true, esto es temporal y para comprobar que se puede introducir nuevos personajes. Posiblemente se cambie en la segunda parte para que haya algun tipo de seguridad.

Tambien se creo la migración para el personaje para que asi exista la tabla que hace falta para que toda la aplicación funcione y tiene esta estructura:

![alt text](https://github.com/OravlaGG/Proyecto-API/blob/main/capturas/Migracion_personaje.png)

La estructura no tiene ningun misterio ya que son datos basicos y ,si sabes algo de juegos de rol, entenderas para que es cada cosa. Aun si no conoces o juegas alguno los nombres son bastante descriptivos

Una vez generada la tabla y echar a andar el proyecto pruebo que puedo hacer un $$\color{Lightblue}{POST}$$ para crear un personaje:

![alt text](https://github.com/OravlaGG/Proyecto-API/blob/main/capturas/post_Json.png)

Al mandar la solicitud de $$\color{Lightblue}{POST}$$ a la aplicación esta nos devolvera un mensaje, si ha sido exitosa nos envia el que aparece abajo del todo de la imagen, sino nos altara un error.

Para hacer una ultima comprobación de que se puede sacar el $$\color{Gold}{Personaje}$$ de la base de datos le hacemos una solicitud $$\color{Green}{GET}$$

![alt text](https://github.com/OravlaGG/Proyecto-API/blob/main/capturas/Get_Json.png)

La solicitud fue un exitosa y nos devuelve los personajes existentes, por ahora solo hay uno que es mi personaje en una campaña que tengo.

Ya sabemos que se pueden crear y sacar datos de la base de datos. Ahora lo que queda es crear el $$\color{RED}{CRUD}$$ para que se pueda hacer por más personas y sea más visual.


Aparte de esto tmambien podemos mándar solicitudes para cambiar algun personaje existente 

ANTES

![alt text](https://github.com/OravlaGG/Proyecto-API/blob/main/capturas/edicion_1.png)

DESPUES

![alt text](https://github.com/OravlaGG/Proyecto-API/blob/main/capturas/edicion_2.png)

Para rematar podemos borrar de manera definitiva un personaje usamos la operación DELETE.

ANTES

![alt text](https://github.com/OravlaGG/Proyecto-API/blob/main/capturas/delete_1.png)

DESPUES

![alt text](https://github.com/OravlaGG/Proyecto-API/blob/main/capturas/delete_2.png)
