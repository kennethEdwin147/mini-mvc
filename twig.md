composer install
ou
composer require twig/twig

include 'vendor/autoload.php'; 

base.twig // inclut le header et footer, au milieu utiliser block main


use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

$this->twig = new Environment( new FilesystemLoader(['vues/']), [
            'debug' => true
        ]);
$this->twig->addExtension(new \Twig\Extension\DebugExtension());


//les vues hérite de base.twig  // Avec extends en haut et utiliser block main

const MODULE_DEFAUT = 'exemple';

