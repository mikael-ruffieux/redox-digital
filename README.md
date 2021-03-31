<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## À propos du site

Pour mettre à jour le site, il suffit de se connecter en accès SSH au serveur distant `0807j.ftp.infomaniak.com`, et de réaliser les opérations suivantes : 

- Passer le site offline : `php artisan down`
- Mettre à jour le code :
    `git pull`
    `composer install`
    `php artisan migrate`
    
- *(optionnel) Relancer FPM : `echo "" | sudo -S service php7.4-fpm reload`*
- *(optionnel) Relancer la queue : `php artisan queue:restart`*
- *(optionnel) Nettoyer le cache : `php artisan cache:clear`*

- Remettre le site en ligne : `php artisan up`


## Licenses

Le site [redoxdigital.ch](https://redoxdigital.ch) est protégé par [la Loi sur le droit d’auteur (LDA) du 9 octobre 1992](https://www.fedlex.admin.ch/eli/cc/1993/1798_1798_1798/fr).

Le framework utilisé est le framework Laravel. C'est un programme open-source sous la [license MIT](https://opensource.org/licenses/MIT).
