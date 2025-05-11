# API SGA

Desarrollado con php 8.2

preferiblemente usar un servidor web apache para el correcto funcionamiento de las url

usar una base de datos mysql

configurar la url de la API WS en el archivo config.php

# API SGA

Esta es api es la capa intermedia entre la capa del frontend y la **API WS**.

## Características

* **PHP 8.2**: Desarrollada con la versión 8.2 de PHP.
* **Uso de la extensión cURL**: Para realizar peticiones HTTP a la API externa usando `curl`.
* **URLs amigables**: Diseñada para funcionar bajo un servidor Apache, aprovechando la reescritura de URLs.

## Requisitos previos

* PHP 8.2 instalado en tu servidor.
* Extensión **cURL** habilitada.
* Usar un servidor web **Apache** preferiblemente para gestionar correctamente las URLs.

## Instalación

1. Clona o descarga este repositorio en tu servidor **Apache**.
2. Verifica que la extensión cURL está habilitada en tu `php.ini`:

   ```ini
   extension=curl
   ```

## Configuración

En el archivo `config.php`, define la URL de la API externa modificando la constante `API_WS_URL`:

```php
<?php
// config.php

// Configuración de la API externa
define('API_WS_URL', 'http://prueba-ga-api-ws.test:8083');
```

Asegúrate de que esta URL apunta al endpoint correcto de tu servidor.
