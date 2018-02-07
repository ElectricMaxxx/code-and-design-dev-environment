FROM php:7-fpm

# wir installieren uns hier in einem Container ein php 7.1/7.2 mit vielen Module
# So sind zum Beispiel extra Features von PHP in extra Modulen geschrieben, um diese
# nutzen zu können müssen sie installiert werden. Solche Features können sein:
# xml lesen/schreiben, Bilder Bearbeiten, Reden mit Datenbanken, ... Xdebug (lasst euch überraschen)
# Wenn dir ein Modul fehlt wäre hier der richtige Ort


# common
RUN apt-get update \
	&& apt-get install -y \
		openssl \
		git
# int
RUN apt-get update \
	&& apt-get install -y libicu-dev \
	&& docker-php-ext-configure intl \
	&& docker-php-ext-install intl

# xml
RUN apt-get update \
	&& apt-get install -y \
	libxml2-dev \
	libxslt-dev \
	&& docker-php-ext-install \
		dom \
		xmlrpc \
		xsl

# images
RUN apt-get update \
	&& apt-get install -y \
	libfreetype6-dev \
	libjpeg62-turbo-dev \
	libgd-dev \
	&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
	&& docker-php-ext-install \
		gd \
		exif
# database
RUN apt-get update && apt-get install -y mysql-client  \
    &&docker-php-ext-install \
        mysqli \
        pdo \
        pdo_mysql

# strings
RUN docker-php-ext-install \
	gettext \
	mbstring
# math
RUN apt-get update \
	&& apt-get install -y libgmp-dev \
	&& ln -s /usr/include/x86_64-linux-gnu/gmp.h /usr/include/gmp.h \
	&& docker-php-ext-install \
		gmp \
		bcmath
# compression
RUN apt-get update \
	&& apt-get install -y \
	libbz2-dev \
	zlib1g-dev \
	&& docker-php-ext-install zip \
		zip

COPY php.ini /etc/php/7.1/
COPY 20-xdebug.ini /etc/php/7.1/cli/conf.d/20-xdebug.ini
COPY 20-xdebug.ini /etc/php/7.1/apache2/conf.d/20-xdebug.ini

USER www-data
