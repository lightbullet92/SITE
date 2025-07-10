<h1>Installation</h1>
<ul>
<li>Install nginx or apache2 with php support</li>
<li>Copy site files to <b>'/path/to/site/dir'</b></li>
<li>Change apache2 or nginx settings (root dir, server name and <b>'location /'</b> directive) in "<b>'/path/to/site/dir'</b>/SOURCES/SETTINGS/apache2/" or "<b>'/path/to/site/dir'</b>/SOURCES/SETTINGS/nginx/" 
respectively</li>
</ul>

<h2>Nginx installation</h2>

<b>user@COMPXX:~$ </b>sudo apt-get -y install nginx php

<h2>Apache2 installation</h2>

<b>user@COMPXX:~$ </b>sudo apt-get -y install apache2 php libapache2-mod-php

<h1>Applying settings</h1>

<h2>Apache2 config</h2>

<b>user@COMPXX:~$ </b>sudo a2dissite 000-default.conf

<b>user@COMPXX:~$ </b>sudo ln -s <b>'/path/to/site/dir'</b>/SOURCES/SETTINGS/apache2/lightbullet.ru.conf /etc/apache2/sites-enabled/lightbullet.ru.conf

<b>user@COMPXX:~$ </b>sudo systemctl restart apache2

<h2>Nginx config</h2>

<b>user@COMPXX:~$ </b>sudo ln -s <b>'/path/to/site/dir'</b>/SOURCES/SETTINGS/nginx/lightbullet.ru.conf /etc/nginx/sites-enabled/lightbullet.ru.conf

<b>user@COMPXX:~$ </b>sudo ln -s <b>'/path/to/site/dir'</b>/SOURCES/SETTINGS/nginx/lightbullet.ru.ssl.conf /etc/nginx/sites-enabled/lightbullet.ru.ssl.conf

<b>user@COMPXX:~$ </b>sudo systemctl restart nginx
