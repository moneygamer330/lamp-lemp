# Tarea LAMP-LEMP 

## Descripción
Ejercicio de desarrollo LAMP y LEMP con Docker, solo funciona la parte de desarrollo LAMP.


## Uso
- Iniciar el servidor web:
    - Para Apache:
        ```sh
        docker compose -f comopse-lamp.yml up --build
        ```
        - Accede al servidor web navegando a `http://test.lamp` en tu navegador web.
    
    - Para Nginx:
        ```sh
        docker compose -f comopse-lemp.yml up --build 
        ```
        - Accede al servidor web navegando a `http://test.lemp` en tu navegador web.

        ## Enlace al repositorio

        Código fuente: [repositorio de GitHub](https://github.com/moneygamer330/lamp-lemp).