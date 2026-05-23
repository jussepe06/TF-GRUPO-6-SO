#Avance 01 del grupo 6 del curso de sistemas operativos
# TechZone Perú - E-Commerce & Monitoreo de SO en Tiempo Real

Este repositorio contiene el código fuente y la configuración de infraestructura para "TechZone Perú", una plataforma de comercio electrónico escalable que integra un panel de monitoreo de recursos del Sistema Operativo en vivo, desarrollada como proyecto final para el curso de Sistemas Operativos.

## Arquitectura del Proyecto

El sistema está desplegado en **Amazon Web Services (AWS)** bajo un modelo de arquitectura distribuida en dos instancias EC2 para garantizar seguridad, rendimiento y escalabilidad:

* **App Server (Aplicación y API):** Servidor Linux Ubuntu encargado de alojar el contenedor de Apache/PHP. Renderiza la interfaz de usuario y ejecuta los scripts del sistema para la lectura del hardware.
* **DB Server (Base de Datos):** Servidor Linux Ubuntu dedicado exclusivamente a correr el contenedor de MariaDB para la persistencia de datos.

## Stack Tecnológico

* **Infraestructura Cloud:** AWS EC2, Linux Ubuntu Server.
* **Virtualización:** Docker, Docker Compose.
* **Frontend:** HTML5, CSS3 (Diseño Glassmorphism y Aurora UI), Vanilla JavaScript.
* **Backend y Monitoreo:** PHP 8.0 (Lectura nativa de `/proc/meminfo` y comandos Shell).
* **Base de Datos:** MariaDB 10.6.

## Funcionalidades Principales

* **Monitoreo de Hardware (En vivo):** El sistema lee directamente el Kernel de Linux mediante PHP para mostrar en la web el porcentaje de uso de la memoria RAM, la carga del CPU y la cantidad de procesos activos del servidor.
* **Catálogo y Carrito Reactivo:** Interfaz de venta de hardware premium con cálculo de totales en tiempo real.
* **Control de Accesos:** Sistema de autenticación en el frontend para proteger las transacciones.
* **Panel de Administración:** Dashboard que registra las compras simuladas asociándolas al usuario logueado en la sesión.
* **Despliegue Contenerizado:** Entorno aislado que evita conflictos de dependencias y asegura la portabilidad del código.

---
