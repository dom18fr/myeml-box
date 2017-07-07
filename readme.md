# Setup du projet

**Projects root**

```bash
echo '192.168.88.66  local.cms.makersboard.me' | sudo tee -a /etc/hosts > /dev/null
vagrant up
vagrant ssh

# now in the vm

cd /var/www/myeml/cms
drush site-install minimal --account-pass=admin --db-url=mysql://myeml_cms:myeml_cms@localhost:3306/myeml_cms
drush cim -y

```
