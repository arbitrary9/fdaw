<?php
// src/Controller/LogController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LogController
{
    public function logger(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}