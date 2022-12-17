<?php

// src/Controller/LuckyController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController {
    
    public function number(): Response {

        // Логика
        $number = random_int(0, 100);

        // Возвращаем данные - вывод прямым ответом
        /*return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );*/

        // Подключаем шаблон Twig для вывода информации
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}