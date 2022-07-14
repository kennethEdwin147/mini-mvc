<?php

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;


class HtmlGabarit 
{
    protected $variables = array();
    protected $module;
    protected $action;
    protected $twig;

    function __construct($module, $action)
    {
        $this->module = $module;
        $this->action = $action; 
        $this->twig = new Environment( new FilesystemLoader(['vues/']), [
            'debug' => true
        ]);
        $this->twig->addExtension(new \Twig\Extension\DebugExtension());
        $this->twig->addGlobal('session', $_SESSION);

    }

    public function affecter($nom, $valeur)
    {
        $this->variables[$nom] = $valeur;
    }

    public function affecterActionParDefaut($nomAction) {
        $this->action = $nomAction;
    }
 
    public function genererVue() 
    {
        $this->twig->display("$this->module.$this->action.twig", $this->variables);
       /*  extract($this->variables);  // Voir la documentation 
        include("vues/entete.inc.php");
        include("vues/$this->module.$this->action.php");
        include("vues/pied2page.inc.php"); */
    }
}