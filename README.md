# EGG DROPPER - KATA PNP
Supongamos que tenemos 100 huevos en un rascacielos de 100 pisos y deseamos realizar un experimento para encontrar el piso más 
alto desde el que podríamos soltar un huevo sin romperlo... pero también tenemos mucha hambre, así que no queremos desperdiciar 
los huevos.

¿Cuandos lanzamientos necesitaremos si solo tenemos 1 huevo? ¿Y si tenemos 2? ¿Y si tenemos n huevos y n plantas?

## Definición del proyecto
El proyecto ha sido construído con **PHP** bajo el framework **Symfony**, se ha usado **VS Code** como editor de texto.

Bajo una petición a una URL, en la cual, opcionalmente, podremos específicar el número de huevos y plantas, este nos devolverá 
un JSON con los valores resultantes de los 3 casos anteriormente mencionados (en caso de no especificar un número de huevos o 
plantas, se nos devolverá el resultado de unos valores por defecto).

## Instrucciones
Para poder lanzar el proyecto necesitamos tener instalado **PHP** y **Composer**.

Nos clonamos el proyecto en nuestra máquina y lanzamos Composer:
~~~
git clone https://github.com/miguelmarquezblasco/kata-egg-dropper-pnp.git
cd kata-egg-dropper-pnp
composer install
~~~
A continuación lanzamos el proyecto sobre nuestro servidor de PHP y visitamos su URL (recuerda que opcionalmente podemos añadir 
la cantidad de huevos y plantas):
~~~
php -S 127.0.0.1:8080 -t public
http://127.0.0.1:8080/
http://127.0.0.1:8080/2/50
~~~

## Tests
Para lanzar los tests deberemos situarnos sobre el directorio de nuestro proyecto y lanzar el siguiente comando:
~~~
php bin/phpunit
~~~
