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

> ⚠️  Lors du `vagrant up`, le mot de passe pour sudo est à nouveau demandé en fin de process.

```
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
