Voici la démarche à suivre pour exécuter l'application en local :

1. Assurez-vous d'avoir PHP et Composer installés sur votre machine. Voici les étapes pour vérifier leur installation :
 
 1.1 Vérifier l'installation de PHP :
  Ouvrez un terminal ou une ligne de commande.
  -> Tapez la commande suivante: php --version
  -> Si PHP est installé, vous verrez la version de PHP affichée à l'écran. Vérifiez que la version est égale ou supérieure à 7.3.0.
  -> Si PHP n'est pas installé ou si la version est inférieure à 7.3.0, vous devrez installer une version plus récente de PHP. Vous pouvez le télécharger à partir du site officiel de PHP (https://www.php.net/downloads.php) et suivre les instructions d'installation appropriées pour votre système d'exploitation.
 
 1.2 Vérifier l'installation de Composer :
   Ouvrez un terminal ou une ligne de commande.
  -> Tapez la commande suivante : composer --version
  -> Si Composer est installé, vous verrez la version de Composer installée sur votre machine. Sinon, vous devrez installer Composer. Vous pouvez le télécharger à partir du site officiel de Composer (https://getcomposer.org/download/) 

2. Ouvrez un terminal ou une ligne de commande et naviguez jusqu'au répertoire racine de projet Laravel.
 
 2.1 Exécutez la commande suivante pour mettre à jour les dépendances du projet : php composer update
 
 2.2 Assurez-vous d'avoir configuré correctement votre fichier .env avec les informations de base de données.
     ->exemple: DB_CONNECTION=mysql
                DB_HOST=127.0.0.1
                DB_PORT=3306
                DB_DATABASE=garage_v_parrot
                DB_USERNAME=root
                DB_PASSWORD=

 2.3 Exécutez la commande suivante pour exécuter les migrations et créer les tables de la base de données : php artisan migrate
 
 2.4 Exécutez la commande suivante pour exécuter les seeders et créer un administrateur pour le back-office : php artisan db:seed
 
 2.5 Vous devriez maintenant avoir un administrateur créé avec les informations suivantes :
      Nom: Vincent Parrot
      Email: vincent@garagevparrot.com
      Mot de passe: vincent@garagevparrot.com
 
 2.6 Enfin, exécutez la commande suivante pour démarrer le serveur de développement : php artisan serve
 
 2.7 Vous pouvez maintenant accéder à l'application en ouvrant votre navigateur et en visitant l'URL 'http://localhost:8000'
