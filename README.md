## ![alt text](https://nuawi.com/_next/image?url=%2FNuawi-logo-dark.png&w=128&q=75 "nuawi")      

##**Nuawi Test**

### Repositorio: nuawi-test

### Configuración:
| Requisitos   			| Versión    			        |
| :------------- 		| :--------- 			        |
| Sistema Operativo    	|                               | 
| Servidor Web      	| `Apache >= 2.4`		        | 
| PHP  					| `PHP >= 8.2.0`				|			
| Base de datos      	| `MySql >= 5.7`		    	| 
| Composer              | `>= 2.1.12`                   |
| Laravel               | `Laravel = 11`               	|



___
**NOTA:** Todos los archivos contenidos en este repositorio son confidenciales.


Instalación
-----------
__Esta guía de instalación presupone que usted tiene instaladas y configuradas las herramientas para el entorno de desarrollo__.

* __Asegúrese de tener instalados los requisitos de configuración.__

* Clonar repositorio.

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
git clone https://github.com/jfranco1191/nuawi-test.git
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

* Posicionarse en la carpeta

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
cd nuawi-test
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

* Instalar paquetes Laravel

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
composer install
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

* Crear el archivo .env

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
cp .env.example
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

* Crear la base de datos de desarrollo `nuawi-test`

* Cambiar las configuraciones del entorno de desarrollo en el archivo `.env` 

* Crear la clave de encriptación de la aplicación

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
php artisan key:generate
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

* Correr migraciones

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
php artisan migrate
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

* Correr seeders

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
php artisan db:seed
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Primeros Pasos
-----------
__Para el inicio de sesion inicial puede usar las siguientes credenciales:__.
* Email: `admin@nuawi.com`
* Password: `123456`


