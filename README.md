# 📂 Prueba Técnica

Esta prueba técnica consiste en una aplicación full-stack construida con Laravel para el backend y Vue.js para el frontend. Su objetivo es gestionar usuarios por rol, visualizar estadísticas y permitir una navegación fluida mediante componentes dinámicos.

## ⚙️ Requisitos

- PHP >= 8.2
- Composer  
- MySQL
- Node.js >= 22 
- NPM o Yarn  
- Vue CLI (para desarrollo del frontend)

##  Clonar el repositorio
```bash
git clone https://github.com/Raydelpq/Test.git
cd Test
```

## Instalación del Backend (Laravel)

Ir al directorio del backend:
```bash
# Ir al directorio del backend
cd backend
# Instalar las dependencias de Laravel
composer install
#Configurar la Base de Datos en el .env 
cp .env.example .env 
# Generar la clave de la aplicación Laravel
php artisan key:generate
# Iniciar el servidor en el puerto 8001
php artisan serve --port=8001
```

## Instalación del Frontend (Vue.js)
```bash
# Ir al directorio del frontend
cd frontend
# Instalar las dependencias
npm install
# Iniciar el servidor
npm run serve
```

## Acceder al front
http://localhost:8080/

## 📡 Ejemplos de consulta a la API (RESTful)

### Listar todos los usuarios paginados
```http
GET http://localhost:8001/api/users?page=1
```

### Listar todos los usuarios paginados por rol
```http
GET http://localhost:8001/api/users/by-role?role=manager
```

### Listar la cantidad de Usuarios por cada Rol
```http
GET http://localhost:8001/api/users/stats
```