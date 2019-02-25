FROM php:7-fpm
MAINTAINER ZQian<zqiannnn@gmail.com>

RUN sed -i 's/deb.debian.org/mirrors.ustc.edu.cn/g' /etc/apt/sources.list
RUN sed -i 's|security.debian.org/debian-security|mirrors.ustc.edu.cn/debian-security|g' /etc/apt/sources.list
RUN apt-get update && apt-get install -y nginx libjpeg-dev  libpng-dev libfreetype6-dev --no-install-recommends \
    && rm -rf /var/lib/apt/lists/*

# Ext
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

COPY . /app/PicUploader
COPY entrypoint.sh /entrypoint.sh

EXPOSE 80

RUN ln -sf /dev/stdout /var/log/nginx/access.log \
	&& ln -sf /dev/stderr /var/log/nginx/error.log

WORKDIR /app/PicUploader

CMD ["/entrypoint.sh"]