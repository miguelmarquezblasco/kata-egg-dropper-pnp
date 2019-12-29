<?php

namespace App\Controller\EggDropper;

use App\Context\EggDropper\Handler\EggDropperHandler;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class EggDropperController
{
    /** @var EggDropperHandler */
    private $handler;

    public function __construct(EggDropperHandler $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @Route("/{eggs}/{floors}", name="home", defaults={"eggs": 0, "floors": 0})
     */
    public function eggDropper(int $eggs, int $floors)
    {
        $minDrops100 = $this->handler->minEggDropper100();
        $minDrops2 = $this->handler->minEggDropper2();
        $minDropsX = $this->handler->minEggDropperX($eggs, $floors);

        return new JsonResponse([
            'title' => 'Egg Dropper',
            'values' => [
                'basic' => $minDrops100,
                'intermediate' => $minDrops2,
                'hard' => $minDropsX
            ]
        ]);
    }
}
