FROM php:8.2-apache
WORKDIR /var/www/html
RUN apt-get update && apt-get install -y git unzip libpq-dev libzip-dev
RUN docker-php-ext-install pdo pdo_pgsql zip
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --ignore-platform-reqs
COPY . .
```

### 3. Add .dockerignore file:
Create a `.dockerignore` in your project root:
```
vendor/
node_modules/
.git/
.env
storage/logs/*
storage/framework/cache/*
storage/framework/sessions/*
storage/framework/views/*