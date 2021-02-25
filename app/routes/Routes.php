<?php

/**
 * Class Routes
 * Créer URL et le passer au controller
 * Format URL --> /controller/method/params
 */
class Routes
{
    protected string $path = 'Pages';
    protected string $method = 'index';
    protected array $params = [];


    public function __construct()
    {
        // Test du path
        print_r($this->getUrl());
    }


    public function getUrl()
    {
        if (isset($_GET['url'])){
            //Supprime les espaces (ou d'autres caractères) de fin de chaîne et '/'
            $url = rtrim($_GET['url'], '/');
            //On filtre les variables et les mets sous formes de chaines de caractères ou de nombres
            $url = filter_var($url, FILTER_SANITIZE_STRING);
            // Retourne un tableau de chaînes de caractères
            $url = explode('/', $url);

            return $url;
        }
    }
}