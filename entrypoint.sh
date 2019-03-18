#!/bin/bash
mkdir -p /app/PicUploader/.tmp && chmod -R o+rw /app/PicUploader
sed -i 's/no/yes/g'  /usr/local/etc/php-fpm.d/zz-docker.conf
php-fpm && nginx -g 'daemon off;'
