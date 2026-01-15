# Nikitos 🍿

Proyecto web desarrollado con **Laravel**, **Vite** y **Tailwind CSS**.  
Incluye un sitio público y un panel de administración para la gestión de productos y categorías.

---

## 🧰 Tecnologías utilizadas

- PHP 8+
- Laravel
- Vite
- Tailwind CSS
- Alpine.js
- MySQL
- Blade Templates

---

## 📦 Requisitos

Antes de comenzar, asegurate de tener instalado:

- PHP 8 o superior
- Composer
- Node.js y npm
- MySQL

---

## 🚀 Instalación y configuración

1. Clonar el repositorio:

```bash
git clone https://github.com/FranciscoVola/nikitos.git
cd nikitos

2. Instalar dependencias de PHP:
composer install

3. Instalar dependencias de Node:
npm install

4. Crear archivo de entorno
cp .env.example .env

5. Generar Key de la aplicación
php artisan key:generate

6. Configurar la base de datos del archivo .env
DB_DATABASE=nikitos
DB_USERNAME=root
DB_PASSWORD=

7. Ejecutar migraciones y seeders:
php artisan migrate --seed

8. Compilar assets:
npm run dev

9. Levantar el servidor:
php artisan serve

El proyecto estará disponible en:
 http://127.0.0.1:8000

Acceso al panel de administración

URL: /admin

Usuario admin generado por seeder:

Email: admin@nikitos.test

Password: Admin1234!

✨ Funcionalidades principales
Sitio público

Home

Listado de productos

Diseño responsive

Login mediante modal

Panel de administración

CRUD de productos

CRUD de categorías

Autenticación de usuarios

Acceso restringido a administradores

📌 Notas

El archivo .env no se incluye por seguridad.

Las imágenes se almacenan en storage/app/public.

Para producción, ejecutar npm run build.