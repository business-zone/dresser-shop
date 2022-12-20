FROM prestashop/prestashop:8.0.0

RUN rm -rf *

COPY src/ ./

RUN chown -R www-data:root ./

RUN a2enmod ssl
COPY ./ssl/apache-selfsigned.crt /etc/ssl/certs/
COPY ./ssl/apache-selfsigned.key /etc/ssl/private/
COPY ./ssl/000-default.conf /etc/apache2/sites-available/
COPY ./ssl/default-ssl.conf /etc/apache2/sites-available/
COPY ./ssl/ssl-params.conf /etc/apache2/conf-available/

RUN a2ensite default-ssl.conf

EXPOSE 80
EXPOSE 443 


