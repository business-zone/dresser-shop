# Dresser Shop
Dresser shop website made using PrestaShop for Electronic Buisness course. 

# How to install Prestashop:
* Clone the repository and set required permissions:
```
chmod -R 777 dresser-shop/
```
* Due to the prestashop installer problems make sure in the /src directory there is no install.lock file, also under the admin9f64 folder there is no child "admin folder

* Go back to the main root and now you can simply run containers by using:
```
docker-compose up --build
```
* Connect to the prestashop instance available at: 
```
localhost:443
```
**IN CASE OF 500 ERROR CHECK HOW TO IMPORT A DATABASE MANUALLY. INSTRUCTION BELOW.**


# Development: Exporting and importing database
To successfully export the database:
* Go to phpmyadmin exposed on localhost:8081
* Log in using u/p: root/root
* Click on the prestashop database located on the left panel
* Click export located on the top toolbar
* Export the database

To successfully import the database:
* Go to phpmyadmin exposed on localhost:8081
* Log in using u/p: root/root
* Click on the mysql database located on the left panel
* Click on the SQL located on the top toolbar and use:
```
drop database prestashop
create database prestashop
```
* Now go to newly created prestashop database
* Click import located on the top toolbar
* Import the database located on the repository under /dbdump directory

In case of an error during importing a database please make sure you use sql.zip db dump.



Created by Farmazone Corp.
