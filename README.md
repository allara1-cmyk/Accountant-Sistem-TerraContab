# Instalar dependencias de PHP
composer install

# Copiar archivo de entorno
cp .env.example .env

# Generar APP_KEY
php artisan key:generate

# Instalar dependencias de Node
npm install

# Compilar assets Frontend
npm run dev

# Levantar contenedores Docker
cd docker
docker compose up -d

# Ejecutar migraciones de la base de datos
php artisan migrate

# Iniciar servidor de desarrollo
php artisan serve
