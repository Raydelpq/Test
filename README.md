# 📂 Prueba Técnica

Esta prueba técnica consiste en una aplicación full-stack construida con Laravel para el backend y Vue.js para el frontend. Su objetivo es gestionar usuarios por rol, visualizar estadísticas y permitir una navegación fluida mediante componentes dinámicos.

## ⚙️ Requisitos

- PHP >= 8.2
- Composer  
- MySQL
- Node.js >= 122 
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
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan serve --port=8001
```

## Instalación del Frontend (Vue.js)
```bash
cd frontend
npm install
npm run serve
```
