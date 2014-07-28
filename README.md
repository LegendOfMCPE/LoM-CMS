LoM-CMS
=========

Simple Website CMS to connect your Server to your Website.

Short Description:
==================
LoM-CMS stands for Legend Of MCPE Content Management System.

The LoM-CMS would require all dependencies to be able to run the CMS. This would require basically a plugin connector that will transmit all datas needed from your server to the website. This plugin connector will be open and might not be uploaded to the PocketMine Forums Repository due to that you need to modify its code for your own needs like amount of kills, deaths, player statistics, account status and more. Dont worry, the plugin connector will also be included in the Release Package. Its still being planned though, no Final decision.

Anyways, this CMS is to help Server Owners who are planning to use Player data management through websites.

# Requirements:
- Web Server (e.g. apache2/nginx/tomcat ..)
- PHP5
- MySQL
- SimpleAuth (NEW API)
- LibYAML (reading yaml files) 
  - If you are hosted on a shared web hosting, ask your hoster to install LibYAML
  - If you are hosted in your own box, just install this by following the tutorial how
  - This is not needed if you're going to use LoM-CMS Plugin Connector which isnt available right now
- PocketMine Directory (For Administrating your Server with GUI)
- LoM-CMS Plugin Connector (If PocketMine Directory is remote) [Not made yet]


# How to Install libYAML

## For Ubuntu Linux

Install PHP-Pear and libYAML
```bash
sudo apt-get install php-pear libyaml-dev
pecl install yaml
```

Now edit your php.ini file located at
```php
/etc/php5/apache2/php.ini
```
and add
```bash
extension=yaml.so
```
Restart Apache2

```bash
sudo service apache2 restart
```