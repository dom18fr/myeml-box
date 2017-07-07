# Project setup

Following setup steps should be provisionned

**Projects root**

```bash
echo '192.168.88.66  local.cms.makersboard.me' | sudo tee -a /etc/hosts > /dev/null
echo '192.168.88.66  local.cdm.makersboard.me' | sudo tee -a /etc/hosts > /dev/null
vagrant up
vagrant ssh

# now in the vm

cd /var/www/myeml/cms
composer install
cd web
cp sites/default/default.local.settings.php sites/default/local.settings.php
drush site-install minimal --account-pass=admin -y
drush cim -y

cd /var/www/myeml/cdm
composer install --no-interaction
bin/console doctrine:schema:create

sudo nano /etc/nginx/sites-enabled/local.cdm.makersboard.me

```

**Copier ce contenu dans le vhost**

```
server {
    server_name local.cdm.makersboard.me;
    root /var/www/myeml/cdm/web;

    location / {
        # try to serve file directly, fallback to app.php
        try_files $uri /app.php$is_args$args;
    }
    # DEV
    # This rule should only be placed on your development environment
    # In production, don't include this and don't deploy app_dev.php or config.php
    location ~ ^/(app_dev|config)\.php(/|$) {
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        # When you are using symlinks to link the document root to the
        # current version of your application, you should pass the real
        # application path instead of the path to the symlink to PHP
        # FPM.
        # Otherwise, PHP's OPcache may not properly detect changes to
        # your PHP files (see https://github.com/zendtech/ZendOptimizerPlus/issues/126
        # for more information).
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
    }
    # PROD
    location ~ ^/app\.php(/|$) {
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        # When you are using symlinks to link the document root to the
        # current version of your application, you should pass the real
        # application path instead of the path to the symlink to PHP
        # FPM.
        # Otherwise, PHP's OPcache may not properly detect changes to
        # your PHP files (see https://github.com/zendtech/ZendOptimizerPlus/issues/126
        # for more information).
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
        # Prevents URIs that include the front controller. This will 404:
        # http://domain.tld/app.php/some-path
        # Remove the internal directive to allow URIs like this
        internal;
    }

    # return 404 for all other php files not matching the front controller
    # this prevents access to other php files you don't want to be accessible.
    location ~ \.php$ {
      return 404;
    }

    error_log /var/log/nginx/myeml_cdm_error.log;
    access_log /var/log/nginx/myeml_cdm_access.log;
}
```
**Gérer les permissions system pour Symfony**

Noter le uid de l'utilisateur sur votre machine hôte, il est visible dans la vm lorsque l'on fait un `ll` dans un dossier
sous le partage nfs.

```
sudo adduser syuser
sudo usermod [uid] syuser

sudo nano /etc/php/7.0/fpm/pool.d/www.conf
# Remplacer www-data par syuser, pour user et pour group

sudo service nginx restart
sudo service php7.0-fpm restart
```
