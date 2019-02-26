<?php
//src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MainController
{
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }


    public function index()
    {
      
        return new Response(
            '<html><body><h1>hello world !</h1></body></html>'
        );
    }
}