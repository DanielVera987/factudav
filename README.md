# FactuDav - Facturación Electronica CFDI3.3

_FactuDav es un proyecto opensource hecho en Laravel, realizado para los desarrolladores que requieran de un sistema con facturación electronica en México, con este proyecto se pretende tener lo basico para el timbrado de facturas cfdi3.3 desde agregar clientes, productos y la creación de facturas y Pre-facturas.
Se ha integrado un proveedor PAC llamado [Multifacturas](https://www.multifacturas.com/), no tenemo relazionado algo con ellos por lo que se requiere entrar a su pagina web y contratar folios para el uso del sistema_

## Comenzando 🚀

### Pre-requisitos 📋

_Antes de empezar con la instalación del sistema es necesario tener en cuenta las siguiente extensiones que se requieren en nuestro servidor_
```
• PHP 7+
• Soap
• Pdo-mysql
• Pdo-sqlite
• Xls
• OpenSSL
```

### Instalación 🔧

_Iniciamos con la instalación de nuestro sistema, damos por entendido que ya se tiene instalado Composer, Git y algun servidor WAMP o XAMPP. En dado caso que no, recomiendo descargar [Laragon](https://laragon.org/) para usuarios Windows_

_Clonamos el proyecto en nuestro directorio de proyectos_
```
git clone https://github.com/DanielVera987/factudav.git
```
_Instalamos los paquetes de laravel_
```
composer install
```
_Creamos nuestra base de datos_
```
mysql> CREATE DATABASE databasename;
```
_Copiamos nuestro archivo .env.example y le cambiamos el nombre a .env y realizamos la configuración de nuestra base de datos_
```
...more

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=databasename
DB_USERNAME=username
DB_PASSWORD=password

...more
```
_Realizamos nuestras migraciones y seeders, Esto puede demorar un poco ya que se agrega todos los catalagos del SAT_
```
dir_project> php artisan migrate --seed
```
_Generamos nuestra key_
```
dir_project> php artisan key:generate
```
_Generamos nuestros links_
```
dir_project> php artisan storage:link
```
_Levantamos nuestro servidor_
```
dir_project> php artisan serve
```
_Iniciamos sesión_
```
user: test@test.com
pass: 123456
```
_Es necesario agregar los archivos .cer y .key para la generación de las facturas y pre-facturas_
_Puedes descargar archivos y rfc de prebas que nos brinda el SAT [Archivos Prueba](http://omawww.sat.gob.mx/tramitesyservicios/Paginas/documentos/RFC-PAC-SC.zip)_

## Ejecutando las pruebas ⚙️

_Para la ejecución de nuestras pruebas unitarias es requerido crear una nueva base de datos para eso debemos configurar nuestro archivo phpunit.xml y agregarle el nombre de nuestra base de datos de pruebas_
```
...more
<php>
 ..more
 <server name="DB_DATABASE" value="databasename_test"/>
<php>
...more
```
_Una vez configurado realizamos nuestras migraciones y seeders a esa base de datos para ello nos vamos a nuestro archivo .env y cambiamos por un momento el nombre de nuestra base de datos por databasename_test_
```
...more
DB_DATABASE=databasename_test
...more
```
_Ejecutamos nuestras migraciones y seeders_
```
dir_project> php artisan migrate --seed
```
_Ejecutamos nuestras pruebas_
```
dir_project> vendor\bin\phpunit
```
_Regresamos el nombre de nuestra base de datos principal y listo 👍_
## Construido con 🛠️
* [Laravel](http://laravel.com/) - El framework web usado
* [CfdiUlits](https://cfdiutils.readthedocs.io/es/latest/) - Paquete para Generación de XML CFDI3.3
* [Multifacturas](https://www.multifacturas.com/) - Integración del Proveedor PAC

## Autores ✒️

_Menciona a todos aquellos que ayudaron a levantar el proyecto desde sus inicios_

* **Daniel Vera** - *Trabajo Inicial y Documentación* - [Danielvera987](https://github.com/DanielVera987/)

## Licencia 📄

Este proyecto está bajo la Licencia (MIT)

## Expresiones de Gratitud 🎁

* Comenta a otros sobre este proyecto 📢
* Invita una cerveza 🍺 o un café ☕  
* Da las gracias públicamente 🤓.


## Guia del Sistema 💻
• _Al iniciar sesión te pedira la configuración inicial del sistema es requerido todos los datos con *_
• _El campo PAC se refiere al usuario y contraseña del proveedor Multifacturas, En dado caso que esos campos se queden en blanco el sistema automaticamente realizara las Pre-facturas que son facturas pero sin timbre fiscal_
• _Para configurar correo electronico se puede hacer desde nuestro archivo .env llenando los siguientes datos_
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=null
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"
```
_se pude usar los servicios de mailtrap para las pruebas de envio de correos, para colocar algun gmail es requerido activar el uso de terceros_
• _Para poder registrar un nuevo usuario se debera activar el link de registro en nuestro archivo de rutas web.php, esto se desactiva con la inteción de que nadie mas pueda hacer uso de la plataforma y solamente uno pueda estar registrado_


---
⌨️ con ❤️ por [Danielvera987](https://github.com/DanielVera987/)😊