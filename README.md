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
git clone https://github.com/tu-usuario/nombre-del-repo.git
cd test
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