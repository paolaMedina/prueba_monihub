# Rest API -Laravel

Rest Api, que permite hacer un CRUD sobre el modelo de cuentas bancarias

## Ejecutar el proyecto

Dentro del directorio del proyecto se ejecuta el comando:

### `php artisan serve`

El endpoint para acceder al CRUD es [http://127.0.0.1:8000/api/acount](http://127.0.0.1:8000/api/acount).

el Formato de la respuesta es:

```json

{
"error": string|null,
"ok": boolean,
"status": int,
"message": string,
"data" object|null
}
```
