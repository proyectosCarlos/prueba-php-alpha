Cordial saludo
===============

# Prueba técnica

Esta app desarrollada en PHP simula la siguiente prueba "Una Startup de cursos online de idiomas desea una aplicación en PHP (en consola) donde tome como mínimo las tres primeras letras para consultar coincidencias en el nombre de sus clases y exámenes en su base de datos.
"

## Instalación 

1. Cree una base de datos mysql y ejecute el contenido del archivo php-test.sql dentro de la misma.
2. En el archivo App/src/config/infoDatabase.php cambie las credenciales de su base de datos y puertos:

ej:

class infoDatabase

{

    public static string $host = 'localhost:3306';
    public static string $db = 'NombreBaseDatos';
    public static string $user = 'NombreUsuario';
    public static string $password = 'Contraseña';
}



## Uso
En la consola ejecute la aplicación mediante el comando "php index.php search palabra " 

## Desarrollo
1. Se crea el modelo entidad-relación para la base datos, solo consta de 3 tablas, clase, examen y tipo de examen.
2. Se define la arquitectura del proyecto, MVC para este caso.
3. Se inicia la aplicación mediante composer, esto con el fin de general los autoload, trabajar de una forma mas limpia con namespaces e incorporar algún paquete (en este proyecto no fue necesario instalar ningún paquete).

## Descripción
En esta prueba se utilizaron conceptos de POO tales como la creación de clases, creación de objetos para instanciar las clases, clases abstractas para definir  los modelos, interfaces para definir un controlador y polimorfismo a través de clases y métodos abstractos. También se utilizaron conceptos de PDO como los prepare statements para realizar las consultas a la Base de datos. 

Se implemento a través de un "Trait" en una de las clases el "patrón singleton" para crear una única instancia del controlador (aunque es reutilizable para cualquier clase).

## Nota
Se utilizaron diferentes formas de acceder a las propiedades de las clases (mediante el constructor o directamente a los métodos) a propósito con el fin de demonstrar conocimiento a cerca del tema.


## License

[MIT](https://choosealicense.com/licenses/mit/)
