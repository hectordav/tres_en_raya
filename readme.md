Readme:  Juego 3 en raya.
Autor: Hector José Davila Velazco.
Profesión: Ingeniero de Sistemas.

****************************************************************************
Instalacion:

1)Descomprimir la carpeta tres_en_raya, copiarla y pegarla en la raiz de su servidor:

Si tiene Instalado Wamp:

C:\wamp\www

Si tiene Instalado Xampp:

C:\xampp\htdocs

2) 3 formas para importar la Base de datos:

2.1)abrir el archivo  bd_tres_en_raya.sql con el bloc de notas y copiar el contenido en phpmyAmdmin en la solapa SQL 

2.2) crear una base de datos en phmyadmin con el nombre bd_tres_en_raya  seleccionar la base de datos en la columna izquierda hacer clic en la solapa importar, seleccionar el archivo bd_tres_en_raya.sql y hacer clic en continuar

2.3) hacer un dump en la consola de comandos de Mysql:
$ mysqldump -u [uname] -p[pass] bd_tres_en_raya > bd_tres_en_raya.sql    (donde uname es el nombre de usuario, pass el password).

3) Si su gestor de Base de datos tiene asignado un usuario y contraseña entrar en config/database.php  y cambiar los parametros requeridos

return array(
    "driver"    =>"mysql",
    "host"      =>"localhost",
    "user"      =>"root",   //<---usuario
    "pass"      =>"",  //<---contraseña
    "database"  =>"bd_tres_en_raya", //<---base de datos
    "charset"   =>"utf8"

4) Para abrir el juego:

abrir el navegador y colocar en la barra de direcciones:

http://localhost/tres_en_raya/