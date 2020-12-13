<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number/{max}")
     */
    public function number($max)
    {
        $min = 1;
        $number = random_int($min, $max);

        return $this->render('lucky/number.html.twig', [
            "number" => $number,
            "min" => $min,
            "max" => $max
        ]);
    }
}
