# Proyecto de Registro de Notas

Este proyecto es una aplicación web para el registro de notas utilizando Laravel e Inertia.js con Vue.js.

## Contenido

- [Instalación](#instalación)
- [Uso](#uso)
- [Estructura del Proyecto](#estructura-del-proyecto)
- [Contribuciones](#contribuciones)
- [Licencia](#licencia)

## Instalación

1. Clona el repositorio:
    ```bash
    git clone https://github.com/tu-usuario/tu-repositorio.git
    ```
2. Navega al directorio del proyecto:
    ```bash
    cd tu-repositorio
    ```
3. Instala las dependencias de PHP:
    ```bash
    composer install
    ```
4. Instala las dependencias de JavaScript:
    ```bash
    npm install
    ```
5. Configura el archivo `.env`:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
6. Ejecuta las migraciones:
    ```bash
    php artisan migrate
    ```

## Uso

1. Inicia el servidor de desarrollo:
    ```bash
    php artisan serve
    ```
2. Compila los assets:
    ```bash
    npm run dev
    ```
3. Accede a la aplicación en tu navegador:
    ```
    http://localhost:8000
    ```

## Estructura del Proyecto

- `app/` - Contiene los archivos principales de la aplicación Laravel.
- `resources/js/` - Contiene los componentes de Vue.js.
- `routes/` - Contiene las rutas de la aplicación.
- `database/migrations/` - Contiene las migraciones de la base de datos.

## Contribuciones

¡Las contribuciones son bienvenidas! Por favor, abre un issue o envía un pull request.

## Licencia

Este proyecto está licenciado bajo la [MIT License](LICENSE).
