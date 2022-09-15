FROM phpdockerio/php:8.1-fpm
WORKDIR "/application"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php8.1-mysql php8.1-sqlite php8.1-redis php8.1-intl imagemagick php8.1-imagick locales php8.1-xdebug php8.1-xml php8.1-gd\
    sqlite3 libsqlite3-dev git\
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

RUN echo "de_CH UTF-8" > /etc/locale.gen
RUN locale-gen de_CH.UTF-8 && export LC_ALL=de_CH.UTF-8

RUN rm /etc/alternatives/php
RUN ln -s /usr/bin/php8.1 /etc/alternatives/php

#Change userid to linux users userid
RUN usermod -u 1000 www-data
