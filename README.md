Aquí tienes el README actualizado con los pasos detallados para la configuración del proyecto:

---

# Farmacia Colón - Plataforma Web
Este proyecto consiste en el desarrollo de una plataforma web para **Farmacia Colón**, diseñada para optimizar su presencia digital, facilitar el acceso de los clientes a los productos y mejorar la gestión interna.

## Equipo de trabajo ##
- **Lucas Simone**
- **Laura Yachelini**

---

## Características Principales
- **Página de Inicio:** Presenta la farmacia y dirige al usuario al catálogo de productos.
- **Catálogo de Productos:** Muestra los productos disponibles con nombre, descripción, precio, stock e imagen.
- **Gestión de Productos (Administración):** Los administradores pueden agregar, editar y eliminar productos.

---

## Tecnologías Utilizadas
- **Framework:** Laravel 10
- **Frontend:** Tailwind CSS
- **Base de Datos:** MySQL (migraciones y seeders configurados)
- **Autenticación:** Laravel Auth con roles básicos *(Próximamente)*

---

## Tablero de Trabajo
El desarrollo del proyecto está documentado y organizado en un tablero de Trello y en un documento de requisitos:
- [**Tablero Trello - Farmacia Colón**](https://trello.com/b/bP60LwF1/web-farmacia-colon)
- [**Documento de Requisitos**](https://www.canva.com/design/DAGXVRh7c9E/Lqyohn8cfEeXy7i6yMqsCA/view?utm_content=DAGXVRh7c9E&utm_campaign=designshare&utm_medium=link&utm_source=editor)

---

## Estructura del Proyecto
- **CRUD de Productos:** Controladores para manejar las operaciones de creación, lectura, actualización y eliminación. Vistas diseñadas con Blade y estilos aplicados con Tailwind CSS.
- **Seeders de Datos Iniciales:** Carga automática de productos iniciales (medicamentos y suplementos).

---

## Próximos Pasos
1. Implementar un buscador avanzado en el catálogo de productos.
2. Añadir filtros por categoría y rango de precios.
3. Crear un sistema de roles avanzado para distinguir entre clientes y administradores.

---

## **Configuración del Proyecto**

Sigue estos pasos para instalar y configurar el proyecto en tu entorno local:

### **1. Clonar el repositorio**
```bash
git clone https://github.com/yachela/web-fcia-colon.git
```

### **2. Instalar dependencias**
- **Composer (PHP):**
  ```bash
  composer install
  ```
- **Node.js (Vite y recursos del frontend):**
  ```bash
  npm install
  ```

### **3. Configurar el entorno**
- Copiar el archivo base `.env.example` y renombrarlo como `.env`:
  ```bash
  cp .env.example .env
  ```
- Editar el archivo `.env` para configurar la base de datos:
  ```env
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=farmaciacolon
  DB_USERNAME=usuario
  DB_PASSWORD=contraseña
  ```

### **4. Preparar la base de datos**
- Crear las tablas en la base de datos:
  ```bash
  php artisan migrate
  ```
- Poblar la base de datos con datos iniciales:
  ```bash
  php artisan db:seed
  ```

### **5. Generar el enlace para las imágenes públicas**
- Crear un enlace simbólico para acceder a las imágenes almacenadas:
  ```bash
  php artisan storage:link
  ```

### **6. Levantar el servidor**
- Ejecutar el servidor local de Laravel:
  ```bash
  php artisan serve
  ```

### **7. Compilar recursos del frontend**
- Durante el desarrollo:
  ```bash
  npm run dev
  ```
- Para producción:
  ```bash
  npm run build
  ```

---

