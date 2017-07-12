# Installation du projet

*Dans l'attente de provisionner toutes ces étapes ...* 

## Monter la vm

### Dépendances sur la machine hôte

  * vagrant
  * ansible
  * plugin vagrant : vb-guest
  * php 5.4+
  * composer

### Go up !

*Sur la machine hôte*

```
echo '192.168.88.66  local.cms.makersboard.me' | sudo tee -a /etc/hosts > /dev/null
echo '192.168.88.66  local.cdm.makersboard.me' | sudo tee -a /etc/hosts > /dev/null
echo '192.168.88.66  local.makersboard.me' | sudo tee -a /etc/hosts > /dev/null
composer install
vagrant up
vagrant ssh
```

## CMS

*Dans la vm*

### Construction des sources avec composer

```
cd /var/www/myeml/cms
composer install
cd web
cp sites/default/default.local.settings.php sites/default/local.settings.php
```

### Configuration pour le dévelopement local

Ajouter les lignes suivantes dans le fichier `sites/default/local.settings.php` :

```
// This enables the config_split module
$config['config_split.config_split.local']['status'] = TRUE;

// Allow Drupal to be accessed from an iframe by CDM (don't set the variable to
// allow any origin).
// $config['myeml_cdm_connector.conf']['allowed_origin'] = 'http://local.cdm.makersboard.me';
```

### Installation de l'instance drupal en BDD

```
drush site-install minimal --account-pass=admin -y
chmod 755 sites/default
chmod -R 755 sites/default/files
drush config-set system.site uuid b126bf6f-d791-4452-8601-c1c69a9fc96c -y
drush cim -y

# Relancer une deuxième fois pour utiliser Config Split
drush cim -y
```

## Permissions system

### Utilisateur applicatif

Lorsque l'on fait du symfony, il est necessaire que l'utilisateur system qui execute php soit propriétaire du code source. En effet, Symfony écrit dans les sources pour le cache, les sessions etc...  
Dans notre VM, les sources sont partagées via nfs et le propriétaire est l'utilisateur sur la machine hôte. Mais cet utilisateur n'existe pas dans le contexte de la vm, seul son uid est visible.
L'astuce consiste donc à créer un utilisateur dans la vm et lui assigner le même uid que l'utilisateur de la machine hôte.
On pourra ensuite configurer php pour qu'il s'execute avec ce user, et aux yeux du système, ce sera bien lui le propriétaire des sources.

*Noter le **UID** de l'utilisateur sur votre machine hôte, il est visible dans la vm lorsque l'on fait un `ll` dans un dossier
sous le partage nfs.*

```
# Créer un user pour php (le mot de passe et les infos user sont sans importance)
# et lui setter le UID de l'utilisateur de la machine hôte
sudo adduser syuser
sudo usermod -u UID syuser

sudo nano /etc/php/7.0/fpm/pool.d/www.conf
```

*Remplacer :*

```
user = www-data
group = www-data
```

*par :*

```
user = syuser
group = syuser
```

### Rédemarer nginx et php

```
sudo service nginx restart
sudo service php7.0-fpm restart
```

## Memcached

Pour de meilleures perfs, les sessions symfony sont stockées dans memcache plutôt qu'en fichier.

```
cd /home/vagrant
sudo apt-get install memcached
sudo apt-get install php-memcached
```

## CDM

*Dans la vm*

### Construction des sources avec composer

```
cd /var/www/myeml/cdm
composer install --no-interaction
```

### Installation de l'instance Clever Data Manager en BDD

```
bin/console doctrine:schema:create
bin/console eavmanager:create-user -a --password=admin admin@clever-age.com
```

### Création d'un vhost pour Symfony

```
sudo nano /etc/nginx/sites-enabled/local.cdm.makersboard.me
```

*Copier ce contenu dans le vhost*

```
server {
    server_name local.cdm.makersboard.me;
    root /var/www/myeml/cdm/web;
    location / {
        try_files $uri /app.php$is_args$args;
    }
    location ^~ /simplesaml {
        alias /var/www/myeml/cdm/vendor/simplesamlphp/simplesamlphp/www;
        index index.php;
        location ~ ^(?<prefix>/simplesaml)(?<phpfile>.+?\.php)(?<pathinfo>/.*)?$ {
            fastcgi_pass 127.0.0.1:9000;
            include fastcgi_params;
            fastcgi_param SCRIPT_FILENAME $document_root$phpfile;
            fastcgi_param PATH_INFO $pathinfo if_not_empty;
        }
    }
    location ~ ^/(app_dev|config)\.php(/|$) {
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
    }
    location ~ ^/app\.php(/|$) {
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
        internal;
    }
    location ~ \.php$ {
      return 404;
    }
    error_log /var/log/nginx/myeml_cdm_error.log;
    access_log /var/log/nginx/myeml_cdm_access.log;
}
```

## Front

*Dans la vm*

### Installation des outils js

```
cd /home/vagrant
curl -sL https://deb.nodesource.com/setup_6.x | sudo -E bash -
sudo apt-get install nodejs
sudo npm install -g yarn
sudo npm install -g webpack
```

### Construction les sources avec composer et yarn

```
cd /var/www/myeml/front
composer install
```

### Création d'un vhost pour Silex

```
sudo nano /etc/nginx/sites-enabled/local.makersboard.me.conf
```

*Copier ce contenu dans le vhost local.makersboard.me.conf*

```
server {
    server_name local.makersboard.me;
    root /var/www/myeml/front/web;
    location / {
        try_files $uri /index.php$is_args$args;
    }
    location ~ ^/index\.php(/|$) {
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param HTTPS off;
    }
    location ~ \.php$ {
        return 404;
    }
    error_log /var/log/nginx/myeml_front_error.log;
    access_log /var/log/nginx/myeml_front_access.log;
}
```

### Rédemarer nginx et php

```
sudo service nginx restart
sudo service php7.0-fpm restart
```

---

## Accès

Accès CMS : 

  * [http://local.cms.makersboard.me](http://local.cms.makersboard.me)
  * admin | admin

Accès CDM : 

  * [http://local.cdm.makersboard.me](http://local.cdm.makersboard.me)
  * admin@clever-age.com | admin

Accès Front : 

  * [http://local.makersboard.me](http://local.makersboard.me)
  * ~

## Procedures

### Drupal

*Dans la vm*

```
# vider les caches

cd /var/www/myeml/cms/web
drush cr

# importer les confs code->base

cd /var/www/myeml/cms/web
drush cim -y

# exporter les confs base->code

cd /var/www/myeml/cms/web
drush cex -y

# installer un nouveau module

cd /var/www/myeml/cms/
composer require drupal/NOM_DU_MODULE
cd web
drush en NOM_DU_MODULE -y
```

### Symfony

*Sur la machine hôte*

```
# vider le cache

rm -rf [project_root]/apps/www/cdm/var/cache/*
```

*Dans la vm*

```
# reconstruire les sources à jour

composer install

# /!\ mettre à jour les versions des dépendances /!\

composer update
```

### Silex / React

*Sur la machine hôte*

```
# vider le cache

rm -rf [project_root]/apps/www/cdm/var/cache/*

# lancer le serveur de dev local react

# @todo
```

*Dans la vm*

```
# reconstruire les sources à jour

composer install

# /!\ mettre à jour les versions des dépendances /!\

composer update
```
