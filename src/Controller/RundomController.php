<?php

// src/Controller/LuckyController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RundomController {

    /**
     * @Route("/lucky/rundom")
     */

    public function number(): Response {

        // Логика
        $number = random_int(0, 100);

        // Возвращаем данные - вывод
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}