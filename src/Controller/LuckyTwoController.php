<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyTwoController
{
    /**
     * @Route("/lucky-two/number")
     * @return Response
     */
    public function number()
    {
        $number = random_int(1000, 10000);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}
