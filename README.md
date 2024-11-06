# Proyecto 2: CRUD de Tareas

## Descripción:
Este proyecto implementa un sistema CRUD (Crear, Leer, Actualizar, Eliminar) para gestionar tareas. Puedes agregar, editar, eliminar y ver las tareas almacenadas en una base de datos.


## Tecnologías Usadas:
  - PHP 8.0+
  - monolog/monolog: Librería para registro de logs.
  - PHPUnit: Framework de pruebas unitarias.

## Requisitos:
  - PHP 8.0 o superior.
  - Composer (para gestionar dependencias).
  - Base de datos MySQL o SQLite (configurable).

## Instalación:
  1. Clona el repositorio:

     ```bash
     git clone https://github.com/lucasaacosta1995/php-crud-task.git
     cd php-crud-task
     ```

  2. Instala las dependencias con Composer:

     ```bash
     composer install
     ```

  3. Configura tu base de datos en el archivo `config/database.php`.

  4. Ejecuta el servidor PHP para el entorno de desarrollo:

     ```bash
     php -S localhost:8000 -t public
     ```

## Estructura del Proyecto:

```bash
.
├── src/
│   ├── Controller/
│   │   └── TaskController.php
│   ├── Model/
│   │   └── Task.php
│   ├── Service/
│   │   └── TaskService.php
├── tests/
│   └── TaskTest.php
├── public/
│   └── index.php
└── config/
    └── database.php
```

## Descripción de Directorios y Archivos:
    - /src: Contiene las clases que implementan la lógica del CRUD.
    - /tests: Contiene las pruebas unitarias para validar el comportamiento del CRUD.
    - /public: Entrada pública de la aplicación.
    - /config: Configuración de la base de datos y otras variables de entorno.

## Funcionalidades:
    - Crear, editar, eliminar y listar tareas.
    - Almacenamiento en base de datos.
    - Registro de logs de errores y eventos importantes.

## Configuración:
    - Configura tu entorno:
        - Asegúrate de tener configurada la base de datos en el archivo config/database.php.
        - Crea una base de datos y tablas necesarias.

## Ejecución de Pruebas:
```bash
./vendor/bin/phpunit --testdox
```