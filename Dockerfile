FROM prestashop/prestashop:1.7.8.7

RUN chown -R www-data:root ./

COPY ssl/keys /etc/ssl/farmazone
COPY ssl/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf
RUN ln -s /etc/apache2/sites-available/default-ssl.conf /etc/apache2/sites-enabled/default-ssl.conf

RUN a2enmod ssl

RUN apt-get update && apt-get install memcached libmemcached-dev zlib1g-dev -y

RUN pecl install memcached

RUN echo extension=memcached.so >> /usr/local/etc/php/php.ini

RUN /etc/init.d/apache2 restart



EXPOSE 443 
EXPOSE 80
