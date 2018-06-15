Wordpress
=========

This role automatically installs Wordpress application : 
<ul>
    <li>Create MySQL database / MySQL user</li>
    <li>Download Wordpress sources</li>
    <li>Configure Apache Vhost (HTTPS)</li>
    <li>Send a POST request to create Wordpress administrator account </li>
    <li> Restart apache2 services </li>
</ul>


Requirements
------------

This role needs all roles created in this repository : 

- apache2
- mysql
- php

This role also needs http/https connection to download Wordpress sources.



Role Variables
--------------

Variable | Mandatory | Default | Description
--- | --- | --- | ---
wp_mysql_db | YES | X | Mysql Wordpress Database
wp_mysql_user | YES | X | Mysql user for Wordpress
apache2_ssl_domain | YES | X | Domain name
apache2_port | NO | 443 | apache2 port
apache2_admin | NO | webmaster@localhost | admin apache2
apache2_folder | NO | /var/www/wordpress | Wordpress folder
apache2_ssl_file | YES | X | SSL certificate
apache2_ssl_key | YES | X | SSL key
wp_title | YES | X | Wordpress site title
wp_username | YES | X | Wordpress user
wp_password | YES | X | Wordpress password user
wp_email | YES | X | Wordpress user email




Dependencies
------------

This role needs all roles created in this repository : 

- apache2
- mysql
- php

Example Playbook
----------------

    - hosts: servers
      roles:
         - apache2
         - mysql
         - php
         - wordpress

I suggest to add all variable into the host file. 

License
-------

BSD

Author Information
------------------
I am an IT engineering student, think to visit my Linkedin profile : 
https://www.linkedin.com/in/laurent-vasseur-b87b60130/
