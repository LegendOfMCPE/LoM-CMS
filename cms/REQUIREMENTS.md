Requirements:
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

How to Install libYAML

For Ubuntu Linux

Install PHP-Pear and libYAML
sudo apt-get install php-pear libyaml-dev
pecl install yaml

Now edit your php.ini file located at
/etc/php5/apache2/php.ini

and add
extension=yaml.so

Restart Apache2
sudo service apache2 restart