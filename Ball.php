<?php

class Ball {
    public $id;
    public $color;
    public $priority;

    public function __construct(int $id, Color $color) {
        $this->id = $id;
        $this->color = $color;
        $this->priority = 0;
    }

    public function calculatePriority($balls, $baskets) {

        // By other balls: set priority according to how many times the color repeats 
        $this->priority = $this->color->ballIndex;
        $this->color->ballIndex += 1;

        // By other balls: if the same-colored ball found, priority increments by one
        // foreach ($balls as $ball) {
        //     if ($ball != $this && $ball->color->id == $this->color->id) {
        //         //
        //     }
        // }
    
        // By baskets: if there is a basket with the same color, priority increments
        foreach ($baskets as $basket) {
            if ($basket->color->id == $this->color->id) {
                $this->priority += 2;
            }
        }

        // Now $this->priority contains total priority number
    }
}