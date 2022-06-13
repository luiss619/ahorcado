<h1>Penjat Edició Marvel</h1>

<p align="center">
    <b>Características</b><br>
    PHP 8.0 | Bootstrap 5 | Jquery 3.6 | Font awesome 6.1 | Animate 4.11
</p>

## About App

La siguiente aplicación muestra el juego del ahorcado en una versión web. Ha sido programado en PHP 8.0 usando el framework Laravel 8. 
Dada la simplicitud de la aplicación, no ha sido necesario integrar una base de datos.

El proyecto se encuentra alojado en un servidor personal con el siguiente subdominio:
https://penjat.dinowebb.com/

Si deseas descargarlo, puedes hacerlo a través de este repositorio o a través del enlace de más abajo
https://penjat.dinowebb.com/ahorcado.zip

Para su funcionamiento, únicamente tienes que seguir los siguientes pasos:

- Asegurarte de que estás usando PHP 7.4 +
- El document root debe empezar dentro de la carpeta public
- Asegurarte de que tienes los permisos correctos de las carpetas. Más info: https://diegooo.com/revision-5-consejos-para-codigos-de-laravel/

## Funcionamiento

El proceso del juego consta de 3 pasos:
- En el primer paso, debes escoger el nº de jugadores que participarán asignandoles un avatar y un nombre
- En el segundo paso, cada jugador deberá descubrir su palabra oculta teniendo un máximo de 5 intentos. Cuando acabe su turno (al acertar la palabra o al fallar 5 veces) se saltará el turno al siguiente jugador. Al completar todos los turnos, se irá al paso 3
- En el tercer paso, podrás ver los resultados del juego (ganadores y perdedores) y podrás reiniciar el juego o solicitar una revancha

La lista de opciones disponibles para el juego la puedes encontrar en el siguiente enlace:
https://penjat.dinowebb.com/personajes.json

## Juegos de pruebas

Para asegurar el buen funcionamiento del juego, se han realizado las pruebas que aparecen en el documento de más abajo.
https://penjat.dinowebb.com/pruebas.pdf

## License
