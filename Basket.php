<?php

class Basket {
    public $id;
    public $color;
    public $balls = [];
    public $ballsCount = 0;

    public function __construct(int $id, Color $color, $count = 0) {
        $this->id = $id;
        $this->color = $color;
        $this->ballsCount = $count; // initial count of balls
    }

    public function push(Ball $ball) {
        $this->ballsCount += 1;
        $this->balls[] = $ball;
    }
}