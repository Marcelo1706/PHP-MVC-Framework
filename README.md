# PHP-MVC-Framework

PHP-MVC-Framework es un Modelo sencillo desarrollado en PHP para cumplir con el paradigma MVC. No es un framework como CodeIgniter o Laravel, solo pretende dar orientación y las configuraciones más básicas para trabajar con MVC.

## Requisitos

* Servidor Web Apache (Puede ser cambiado a Nginx modificando el archivo .htaccess)
* PHP 5.6 en adelante

## Estructura del Proyecto

Este proyecto esta formado por la siguiente estructura de archivos:

```bash
├───Controladores				# Carpeta donde se guardarán los controladores
│   ├───home.controlador.php	# Controlador de la página Principal
│   ├───error.controlador.php	# Controlador de la página de Error 404
├───Inclusiones					# Carpeta donde se guardan los archivos a incluir en las vistas
│   ├───header.php				# Archivo con la cabecera de cada vista desde <html> hasta <body>
│   └───footer.php				# Archivo con el pie de cada vista, desde scripts hasta </html>
├───Modelos						# Carpeta donde se guardarán los modelos
│   ├───home.modelo.php			# Modelo de la página Principal
│   ├───error.modelo.php		# Modelo de la página de Error 404
├───Recursos					# Carpeta de recursos para las vistas
│   ├───css 					# Carpeta para el CSS local
│   ├───img						# Carpeta para imágenes estáticas
│   ├───js						# Carpeta para el JS local
│   └───upload					# Carpeta para subida de archivos
└───Vistas						# Carpeta donde se guardarán las vistas
    ├───Paginas					# Carpeta para los archivos HTML o PHP del Front-End
    |   ├───home.php 			# Archivo de la página Principal
    |   ├───error.php 			# Archivo de la página de error 404
    ├───home.vista.php          # Vista de la página Principal
    └───error.vista.php 		# Vista de la página de Error 404
```

## Utilización 
Para utilizar este modelo, se deben seguir los siguientes convenios: 
 * Los archivos deberán llamarse foo.controlador.php, foo.modelo.php y foo.vista.php
 * Las clases deberán llamarse fooControlador, fooModelo y fooVista

## Licencia
[GPL v3.0](https://choosealicense.com/licenses/gpl-3.0/)
