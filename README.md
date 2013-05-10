Glue Demo
=========

Glue Demo is a fully-functional PHP application based on [Glue][1] (lightweight PHP framework based on Symfony2 components).
It can be used as the skeleton for your new applications.

Installation
------------

Download an archive of this application and unpack it somewhere under your web server root directory.

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php

Install the required dependencies using composer:

    php composer.phar install

Make sure your host is loading the web folder. Example Apache2 vhost below:

    <VirtualHost *:80>
            ServerName glue-demo.liv
            DocumentRoot /Users/liviu/work/glue-demo.liv/web

            <Directory /Users/liviu/work/glue-demo.liv/web>
                    Options -Indexes FollowSymLinks MultiViews
                    AllowOverride All
                    Allow from All
            </Directory>
    </VirtualHost>

[1]: https://github.com/ubick/glue
