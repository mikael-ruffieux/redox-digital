<p align="center"><a href="https://redoxdigital.ch" target="_blank"><img src="https://redoxdigital.ch/assets/img/logo/Redox-Digital_Logotype-slogan-blanc-rouge.png" width="400" alt="Redox Digital"></a></p>

## À propos du site

Pour mettre à jour le site, il suffit de se connecter en accès SSH au serveur distant et de réaliser les opérations suivantes :

-   Se déplacer dans le dossier du site : `cd nom-du-dossier`
-   Passer le site offline : `php artisan down`
-   Mettre à jour le code : `git pull`
-   Mettre à jour composer : `composer install`
-   Mettre à jour les bases de données _(si de nouvelles BdD ont été créées)_ :`php artisan migrate`

<br/>

-   _(dans le futur) Si l'on a modifié la configuration, les routes ou les views :
    `php artisan config:cache`
    `php artisan route:cache`
    `php artisan view:cache`_

<br/>

-   _(dans le futur) Relancer FPM : `echo "" | sudo -S service php7.4-fpm reload`_
-   _(dans le futur) Relancer la queue : `php artisan queue:restart`_
-   _(dans le futur) Nettoyer le cache : `php artisan cache:clear`_

<br/>

-   Remettre le site en ligne : `php artisan up`

## Développement

Pour lancer le site web dans un environnement de développement, assurez-vous d'avoir un serveur de base de données en ligne.

Lancez le site web avec : `php artisan serve`

## Licenses

Le site [redoxdigital.ch](https://redoxdigital.ch) est protégé par [la Loi sur le droit d’auteur (LDA) du 9 octobre 1992](https://www.fedlex.admin.ch/eli/cc/1993/1798_1798_1798/fr).

Le framework utilisé est le framework Laravel. C'est un programme open-source sous la [license MIT](https://opensource.org/licenses/MIT).
