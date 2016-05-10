HapplyHourApi
=============

## How to release

```sh
$ git clone git@github.com:UnderDevCrew/HapplyHourApi.git
$ cd HapplyHourApi
$ git checkout master
$ composer install
$ setfacl -R -m u:www-data:rwx -m u:`whoami`:rwx var/cache var/logs var/sessions
$ setfacl -dR -m u:www-data:rwx -m u:`whoami`:rwx var/cache var/logs var/sessions
```
