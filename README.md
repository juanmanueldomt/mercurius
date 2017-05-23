PROYECTO DIFUSION ELECTRONICA DE NOTIUPIICSA
==========================
[![License](https://img.shields.io/badge/License-BSD%202--Clause-orange.svg)](https://opensource.org/licenses/BSD-2-Clause)


*"Vive de manera que puedas mirar fijamente a los ojos
                    de cualquiera y mandarlo al diablo."* -Henry-Louis Mencken

**Nombre clave**: MERCURIUS  
**Tipo**: Aplicacion WEB  
**Institucion**: UPIICSA - IPN  
**Fecha de Creacion**: 10/11/16  

## SINOPSIS ##  
ESTE PROYECTO SURGE PARA CUBRIR LA NECESIDAD DE DIFUSION DEL BOLETIN UNIVERSITARIO EN LA UNIDAD PROFESIONAL INTERDISCIPLINARIA DE INGENIERIA DE CIENCIAS SOCIALES Y ADMINISTRATIVAS PERTETENECIENTE AL INSTITUTO POLITECNICO NACIONAL. EL PLAN GENERAL DICTA QUE SERA UNA APLICACION MOVIL NUTRIDA POR SERVICIOS WEB.

## INSTALACION ##
**REQUISITOS**
* MYSQL  
* APACHE  
* PHP  

## INSTRUCCIONES ##  
1. CREAR EL ESQUEMA DE LA BASE DE DATOS.
Esto generara las tablas necesarias para la utilizacion de la pagina web.  
*comando:*  
`mysql -u[usuario] -p < [direcciondelarchivo]`
*parametros:*  
usuario: Nombre del usuario (normalmente "root")  
direcciondelarchivo: Direccion del archivo database.sql (se encuentra en extras)  

2. MODIFICAR LOS DATOS DE ACCESO A LA BASE DE DATOS.  
Brinda los datos de acceso a la base de datos.  
**Instrucciones:**  
    * Abrir el archivo db.php que se encuentra en la raiz del proyecto.  
    * Modificar los siguientes parametros:  
        * $servername = "[direccion]";  
        * $username = "[usuario]";  
        * $password = "[password]";  
        * $dbname = "[esquema]";  

            *Parametros:*  
            direccion: direccion del servidor de base de datos, default=localhost.
            usuario: usuario de la base de datos, default=root.
            password: constraseña para acceder a la base de datos.
            esquema: nombre de la tabla en la base de datos.  

3. MOVER LOS FICHEROS
Mueve los ficheros a donde el servidor pueda difundirlos.  
*instrucciones:*  
* Mover la carpeta entera del proyecto a la carpeta raiz del servidor, si usas XAMPP a "/directorioXAMPP/htdogs"  





## VERSIONES ##

>Version 0.2.3.2
23/05/17    @SmeAngeles 
-Banner
-Modificacion Recuadro noticias

>Version 0.2.3.1
18/05/17    @juanmanueldomt  
-Quitar Barra de Navegacion
-Recuadro a Media

>Version 0.2.3
23/03/17    @juanmanueldomt  
-Implementacion Completa de Filtering  

>Version 0.2.2
23/03/17    @juanmanueldomt  
-Implementacion de Interfaz JavaScript Completa  

>Version 0.2.1
23/03/17    @juanmanueldomt  
-Implementacion de Interfaz JavaScript  

>Version 0.2.1
23/03/17    @juanmanueldomt  
-Mejora del README  

>Version 0.2  
13/03/17    @juanmanueldomt  
-Adaptaciones inciales para Produccion  

>Version 0.1.1  
15/02/17    @juanmanueldomt  
-Correccion minima de errores  

>Version 0.1  
15/02/17    @juanmanueldomt  
-Correccion mayor de errores  
-Nuevo Slider
-Implementaciones a base de datos
-Nuevo diseño
-implementacion de alertas
-nuevos show,register,newuser.

>Version 0.0.5.1  
31/01/17    @juanmanueldomt  
-Correccion menor de errores  
-Conocenos  
-Registro en Blanco  

>Version 0.0.5  
31/01/17    @juanmanueldomt  
-Control de Usuarios  
-Correccion menor de errores  
-Implementacion subir articulos  
-Implementacion de Sesion  
-Implementacion de Acceso  

>Version 0.0.4.5  
24/01/17    @juanmanueldomt  
-Correccion de Errores  

>Version 0.0.4.4  
24/01/17    @juanmanueldomt  
-Control de Versiones nuevo  

>Version 0.0.4.3  
24/01/17    @juanmanueldomt  
-Manejo de Errores MYSQLI  

>Version 0.0.4.2  
24/01/17    @juanmanueldomt  
-Correccion Implementacion Online  

>Version 0.0.4.1  
24/01/17    @juanmanueldomt  
-Primera Implementacion Online  
-Nuevo Editor de Articulos  

>Version 0.0.4  
13/12/16    @juanmanueldomt  
-Implementacion total de Responsive Design  
-Index Completado  

>Version 0.0.3.2  
30/11/16    @juanmanueldomt  
-Creacion del README  
-Prototipo index  
-Correcciones index  

>Version 0.0.3.1  
30/11/16    @juanmanueldomt  
-Mejoras al Paginado  
-Posible CSS añadido  

>Version 0.0.3  
30/11/16    @juanmanueldomt  
-Implementacion del Paginado  

>Version 0.0.2  
29/11/16    @juanmanueldomt  
-Implementacion de carrusel en index  
-Importacion de librerias de Bootstrap, JScript  

>Version 0.0.1  
29/11/16    @juanmanueldomt  
-Creacion index.php  
-Generacion de la base de datos  

>Estructura Basica  
29/11/16    @juanmanueldomt  
-Creacion el proyecto en git  
-Creacion la estructura basica del proyecto  


## PRUEBAS ##
-ninguna

## DESARROLLADORES ##
Juan Manuel Dominguez Tlapale
@juanmanueldomt 18/06/1995
Estudiante Ing Informatica
UPIICSA


## ESQUEMAS ##
**BASE DE DATOS**
Boletin_Upiicsa
    ├── NOTICIA
    │   ├──── ID_NOTICIA
    │   ├──── TITULO
    │   ├──── AUTOR
    │   ├──── CONTENIDO
    │   └──── ETIQUETA
    └── USUARIO
        ├──── ID_USUARIO
        ├──── NOMBRE
        ├──── APELLIDOS
        ├──── ROL
        ├──── EMAIL
        └──── PASSWORD
