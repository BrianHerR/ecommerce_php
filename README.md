# E-Commerce PHP MVP

Proyecto backend para comercio electrónico desarrollado desde cero en PHP utilizando una arquitectura MVC personalizada. El objetivo del proyecto es aplicar buenas prácticas modernas de desarrollo backend, diseño de software, testing automatizado y contenerización con Docker.

---

## 🚀 Características Principales

* Arquitectura MVC personalizada.
* Tipado estricto (`declare(strict_types=1)`).
* Autoloading PSR-4 mediante Composer.
* Uso de Namespaces.
* Gestión de variables de entorno con `vlucas/phpdotenv`.
* Conexión a MySQL mediante PDO.
* Dockerización completa del entorno:

  * Nginx
  * PHP-FPM
  * MySQL 8
* Testing automatizado con PHPUnit.
* Integración Continua (CI) mediante GitHub Actions.
* Sistema preparado para logs, cache y archivos temporales mediante la carpeta `storage`.
* Compatibilidad con entornos Linux y Docker.

---

## 🛠️ Requisitos Previos

Para ejecutar el proyecto solo necesitas:

* Docker Desktop
* Docker Compose

Opcionalmente:

* Git
* Composer (para desarrollo local)

---

## 📦 Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/BrianHerR/ecommerce_php.git
cd ecommerce_php
```

### 2. Instalar dependencias

```bash
composer install
```

### 3. Crear archivo de entorno

Copiar el archivo de ejemplo:

```bash
cp .env.example .env
```

En Windows PowerShell:

```powershell
copy .env.example .env
```

Completar las variables necesarias:

```env
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

APP_KEY=
```

### 4. Levantar los contenedores

```bash
docker compose up -d --build
```

### 5. Acceder a la aplicación

Abrir en el navegador:

```text
http://localhost:8080
```

---

## 🐳 Arquitectura Docker

El proyecto se ejecuta mediante tres servicios:

```text
Browser
   │
   ▼
Nginx
   │
   ▼
PHP-FPM
   │
   ▼
MySQL
```

### Servicios

| Servicio | Descripción         |
| -------- | ------------------- |
| nginx    | Servidor web        |
| app      | Aplicación PHP-FPM  |
| db       | Base de datos MySQL |

---

## 🏗️ Estructura del Proyecto

```text
.
├── .github/
│   └── workflows/          # Pipelines de CI/CD con GitHub Actions
│
├── app/                    # Código fuente principal de la aplicación
│   ├── Controllers/        # Controladores que manejan las peticiones HTTP
│   ├── Core/               # Componentes fundamentales (Router, Database, Logger, etc.)
│   ├── Routes/             # Definición y registro de rutas
│   └── Views/              # Vistas y plantillas de la aplicación
│
├── config/                 # Archivos de configuración centralizados
│
├── docker/                 # Configuración de contenedores Docker
│   ├── nginx/              # Configuración del servidor Nginx
│   └── php/                # Dockerfile y configuración de PHP-FPM
│
├── public/                 # Punto de entrada público (Front Controller y assets)
│
├── storage/                # Archivos generados dinámicamente por la aplicación
│   ├── logs/               # Logs de errores, eventos y depuración
│   ├── cache/              # Archivos de caché para optimizar rendimiento
│   └── temp/               # Archivos temporales generados en ejecución
│
├── tests/                  # Pruebas automatizadas con PHPUnit
│
├── .env.example            # Plantilla de variables de entorno
├── .gitignore              # Archivos y carpetas ignorados por Git
├── composer.json           # Dependencias y configuración de Composer
├── composer.lock           # Versiones exactas de dependencias instaladas
├── docker-compose.yml      # Orquestación de Nginx, PHP-FPM y MySQL
├── phpunit.xml             # Configuración de PHPUnit
└── README.md               # Documentación principal del proyecto
```

## 📁 Carpeta Storage

La carpeta `storage` almacena archivos generados por la aplicación.

```text
storage/
├── logs/
├── cache/
└── temp/
```

### logs

Registra errores y eventos de la aplicación.

Ejemplos:

```text
Usuario autenticado
Error de conexión MySQL
Error de procesamiento de pedido
```

### cache

Permite almacenar datos temporales para mejorar el rendimiento.

### temp

Almacena archivos temporales generados durante la ejecución.

---

## 🧪 Testing

Ejecutar pruebas:

```bash
./vendor/bin/phpunit
```

o en Windows:

```bash
vendor\bin\phpunit
```

---

## 🔄 Integración Continua

Cada Push y Pull Request sobre la rama principal ejecuta automáticamente:

* Instalación de dependencias.
* Validación del proyecto.
* Ejecución de pruebas PHPUnit.

Mediante GitHub Actions.

---

## 📌 Roadmap

Próximas funcionalidades:

* Autenticación de usuarios.
* Roles y permisos.
* Gestión de productos.
* Categorías.
* Carrito de compras.
* Checkout.
* Gestión de órdenes.
* Sistema de logs.
* Cache de consultas.

---

## 🤝 Contribuciones

Las contribuciones son bienvenidas mediante Pull Requests.

---

## 📜 Licencia

MIT License
