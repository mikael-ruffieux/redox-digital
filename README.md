<p align="center"><a href="https://redoxdigital.ch" target="_blank"><img src="http://redoxdigital.ch/assets/img/logo/Redox-Digital_Logotype-slogan-blanc-rouge.png" width="400" alt="Redox Digital"></a></p>


## À propos du site

Pour mettre à jour le site, il suffit de se connecter en accès SSH au serveur distant `0807j.ftp.infomaniak.com`, et de réaliser les opérations suivantes : 

- Passer le site offline : `php artisan down`
- Mettre à jour le code :
    `git pull`
    `composer install`
    `php artisan migrate`

- Si l'on a modifié la configuration, les routes ou les views : 
    `php artisan config:cache`
    `php artisan route:cache`
    `php artisan view:cache`

- *(optionnel) Relancer FPM : `echo "" | sudo -S service php7.4-fpm reload`*
- *(optionnel) Relancer la queue : `php artisan queue:restart`*
- *(optionnel) Nettoyer le cache : `php artisan cache:clear`*

- Remettre le site en ligne : `php artisan up`


## Licenses

Le site [redoxdigital.ch](https://redoxdigital.ch) est protégé par [la Loi sur le droit d’auteur (LDA) du 9 octobre 1992](https://www.fedlex.admin.ch/eli/cc/1993/1798_1798_1798/fr).

Le framework utilisé est le framework Laravel. C'est un programme open-source sous la [license MIT](https://opensource.org/licenses/MIT).
