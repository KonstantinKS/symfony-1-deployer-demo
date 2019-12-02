<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyThreeController extends AbstractController
{
    /**
     * @Route("/lucky-three/number")
     */
    public function number()
    {
        $number = random_int(150, 177);

        return $this->render('lucky-three/number.html.twig', ['number' => $number]);
    }
}
