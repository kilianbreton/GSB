<?php
//src/Controller/LuckyController.php
namespace App\Controller;

use App\Entity\Visiteur;
use Symfony\Component\HttpFoundation\Response;

class MainController
{
   

    public function index()
    {
     
     
        return new Response('<html><body><h1>hello world !</h1></body></html>');
    }
}