MySQL 
=========

This role had been created thank to this tutorial : http://techwatch.keeward.com/geeks-and-nerds/properly-install-mysql-on-production-server-using-ansible/

This role installs MySQL server and deletes default users and database. 

Requirements
------------

These are requirements : 
<ul>
<li>Internet connection</li>
</ul>


Role Variables
--------------

Variable | Mandatory | Default | Description
--- | --- | --- | ---
wp_mysql_password | YES | X | root password for Mysql

Dependencies
------------

This role doesn't have any dependencies

Example Playbook
----------------

    - hosts: servers
      roles:
         - { role: apache2, wp_mysql_password: secretpassword }

License
-------

BSD

Author Information
------------------
I am an IT engineering student, think to visit my Linkedin profile : 
https://www.linkedin.com/in/laurent-vasseur-b87b60130/
