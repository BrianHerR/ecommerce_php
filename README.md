# E-Commerce PHP MVP

Un proyecto backend para comercio electrónico construido con una arquitectura Modelo-Vista-Controlador (MVC) personalizada desde cero en PHP. Diseñado para ser ligero, escalable y aplicando buenas prácticas modernas de desarrollo.

## 🚀 Características Principales

- **Arquitectura Limpia (MVC):** Separación clara entre Rutas, Controladores, Vistas y Lógica Core.
- **Prácticas Modernas:** Tipado estricto (`declare(strict_types=1)`), carga automática PSR-4 y uso de namespaces.
- **Gestión de Entorno:** Integración con `vlucas/phpdotenv` para cargar configuraciones sensibles de manera segura.
- **Base de Datos:** Implementación de PDO con patrón Singleton para conexiones eficientes a MySQL.
- **Testing y CI/CD:** Configurado con **PHPUnit** para pruebas automatizadas y **GitHub Actions** para validación e integración continua (CI).
- **Docker-Ready:** Incluye archivo `docker-compose.yml` para desplegar rápidamente el motor de base de datos local (MySQL 8).
- **Gestor Frontal (Front Controller):** Todas las solicitudes son centralizadas a través de `public/index.php`.

## 🛠️ Requisitos Previos

Asegúrate de contar con las siguientes herramientas en tu entorno local:

- [PHP](https://www.php.net/downloads) (Versión recomendada >= 8.1)
- [Composer](https://getcomposer.org/) para gestión de dependencias.
- [Docker](https://www.docker.com/) y Docker Compose (para levantar la base de datos fácilmente).

## 📦 Instalación y Configuración

Sigue estos pasos para levantar el entorno de desarrollo:

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/tu-usuario/ecommerce_php.git
   cd ecommerce_php
   ```

2. **Instalar dependencias:**
   Descarga e instala las librerías necesarias con Composer (incluyendo PHPUnit para desarrollo):
   ```bash
   composer install
   ```

3. **Configurar variables de entorno:**
   Crea o modifica tu archivo de configuración basándote en un archivo `.env` o en el archivo requerido por el proyecto (ej. `env.dev`).
   Asegúrate de proveer las credenciales correctas para MySQL (`DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

4. **Levantar la base de datos (Docker):**
   Inicia el contenedor de MySQL incluido en el proyecto:
   ```bash
   docker-compose up -d
   ```

5. **Iniciar el servidor de desarrollo:**
   Usa el servidor web integrado de PHP, apuntando la raíz del documento a la carpeta `public/`:
   ```bash
   php -S localhost:8000 -t public
   ```
   *La aplicación estará disponible en [http://localhost:8000](http://localhost:8000).*

## 🏗️ Estructura del Proyecto

```text
├── .github/workflows/    # Pipeline de CI/CD (GitHub Actions)
├── app/                  # Código fuente de la aplicación (Namespace: App\)
│   ├── Controllers/      # Controladores (ej. HomeController.php)
│   ├── Core/             # Lases fundamentales: Router, base de datos (PDO)
│   ├── Routes/           # Registro de rutas (web.php)
│   └── Views/            # Vistas y plantillas organizadas por sección
├── config/               # Configuraciones (ej. database.php)
├── public/               # Archivos públicos (CSS, JS) e index.php principal
├── tests/                # Pruebas unitarias (PHPUnit)
├── docker-compose.yml    # Definición de contenedor para MySQL
├── phpunit.xml           # Configuración de pruebas
└── composer.json         # Definición del proyecto y dependencias
```

## 🧪 Pruebas Automatizadas

El proyecto utiliza **PHPUnit** para garantizar el funcionamiento del código base.

Para correr las pruebas localmente:
```bash
./vendor/bin/phpunit
```

Cada vez que realizas un *push* o abres un *pull request* en la rama `main`, **GitHub Actions** ejecutará automáticamente la suite de pruebas para verificar que los últimos cambios no hayan roto el sistema.

## 🤝 Contribuciones

Siéntete libre de proponer mejoras para el *Router*, implementar un motor de *Vistas* (como Twig), o estructurar la capa de *Modelos* abriendo un Pull Request.

## 📜 Licencia

[MIT License](LICENSE)
