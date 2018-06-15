# Ansible-Wordpress

This repository gathers 4 differents roles : 
- Apache2
- Mysql
- PHP
- Wordpress 

These roles will automatically install Wordpress application on a server.
Please read each role description before using it ! 

# Example : 

This is a host file : 

```
[webserver]
X.X.X.X

[webserver:vars]
wp_mysql_db='wordpress'
wp_mysql_user='WordpressMysql'
wp_mysql_password='WordpressMysqlPassword'

wp_title='MyWebSite'
wp_username='UserWordpress'
wp_password='UserWordpressPassword'
wp_email='myemail@something.net'

apache2_ssl_domain='prod.mydomain.net'
apache2_ssl_file='/etc/letsencrypt/live/prod.mydomain.net/fullchain.pem'
apache2_ssl_key='/etc/letsencrypt/live/prod.mydomain.net/privkey.pem'

```

Example of playbook : 

```
---
- hosts : webserver
  roles:
    - apache2
    - mysql
    - php
    - wordpress
```
