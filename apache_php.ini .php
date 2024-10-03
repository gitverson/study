<?php

#multile website hosting 

<VirtualHost *:80>
    DocumentRoot "e:/DocRoot/SingleHosting/"
    ServerName eoi.gov.in
    ServerAlias www.eoi.gov.in
    ServerAlias hci.gov.in
    ServerAlias www.hci.gov.in
    ServerAlias cgi.gov.in
    ServerAlias www.cgi.gov.in
	
    ErrorLog "e:/logs/error.log"
    CustomLog "e:/logs/access.log" common
</VirtualHost>



<VirtualHost *:80>
    DocumentRoot "E:/DocRoot/SingleHosting"
    ServerName 10.246.52.134
    ServerAlias 164.100.68.96
   #Redirect permanent / https://meawebsupport.nic.in/
    ErrorLog "e:/logs/singlehosting-error.log"
    CustomLog "e:/logs/singlehosting-access.log" waf
</VirtualHost>


Multiple domains you want to redirect like this:

<VirtualHost *:80>
    ServerName example.com
    ServerAlias foo.example.com bar.example.com others.example.com
    DocumentRoot /www/redirect_folder 
</virtualhost>




#custom error page 

ErrorDocument 404 /index.php


#clickjacking prevent ,

Header always set X-Frame-Options "sameorigin"




#SSL configuraltion
httpd-ssl.conf


#PHP.ini Settings

# What is the maximum size of a file that can be uploaded using PHP and how can we change this?
we can change the following setup at php.ini upload_max_filesize = 2M


# How can we increase the execution time of a PHP script?

by changing the following setup at php.ini max_execution_time = 30;
ini_set('max_execution_time', 60);

# How is it possible to set an infinite execution time for PHP script?

The set_time_limit(0) added at the beginning of a script sets to infinite the time of execution to not have the PHP error ‘maximum execution time exceeded.’ It is also possible to specify this in the php.ini file.


# enable the display_error setting ,  How can you enable error reporting in PHP?

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);



#Suppose your Zend engine supports the mode <? ? > Then how can u configure your PHP Zend engine to support <? PHP ? > mode ?
In php.ini file:
set
short_open_tag=on
to make PHP support


# What is php.ini & .htacess file?

Both are used to make the changes to your PHP setting. These are explained below:

php.ini: It is a special file in PHP where you make changes to your PHP settings. It works when you run PHP as CGI. It depends on you whether you want to use the default settings or changes the setting by editing a php.ini file or, making a new text file and save it as php.ini.

.htaccess: It is a special file that you can use to manage/change the behavior of your site. It works when PHP is installed as an Apache module. These changes include such as redirecting your domain’s page to https or www, directing all users to one page, etc. 



?>
