1. composer require twig/twig

2. include 'vendor/autoload.php'; // autochargement des classes librairies externes

3. base.twig // inclut le header et footer, au milieu utiliser block main

4. 
use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

5. $this->twig = new Environment( new FilesystemLoader(['vues/']), [
            'debug' => true
        ]);
$this->twig->addExtension(new \Twig\Extension\DebugExtension());

6. https://twig.symfony.com/doc/3.x/functions/dump.html


7. //les vues hérite de base.twig  // Avec extends en haut et utiliser block main

8. accueil.index.twig

9.

