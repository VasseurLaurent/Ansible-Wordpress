Apache 2
=========

This role will install apache2 and delete default files created by apache2 installation.
Furthermore, this role will automatically request a certificate through Let's encrypt certbot.


BE CAREFUL : This role doesn't install any Vhosts ! 

Requirements
------------

These are requirements : 
<ul>
<li>The server needs a https access to internet to request a SSL certificate</li>
<li>The server needs a domain name to request a SSL certificate</li>
</ul>


Role Variables
--------------

Variable | Mandatory | Default
--- | --- | ---
apache2_ssl_domain | YES | X

Dependencies
------------

This role doesn't have any dependencies

Example Playbook
----------------

    - hosts: servers
      roles:
         - { role: apache2, apache2_ssl_domain: mydomain.net }

License
-------

BSD

Author Information
------------------
I am an IT engineering student, think to visit my Linkedin profile : 
https://www.linkedin.com/in/laurent-vasseur-b87b60130/
