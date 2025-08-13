# Usa a imagem base oficial com Apache
FROM php:8.2-apache

# Define o diretório de trabalho
WORKDIR /var/www/html

# Instala pacotes necessários do sistema e extensões do PHP
RUN apt-get update && \
    apt-get install -y zip unzip libicu-dev libxml2-dev libonig-dev git && \
    docker-php-ext-install intl pdo pdo_mysql mbstring

# Copia os arquivos da aplicação para o container
COPY . /var/www/html

# Ativa o módulo reescrita do Apache (necessário para CakePHP)
RUN a2enmod rewrite

# Expõe a porta padrão do Apache
EXPOSE 80
