<?php

class Color {
    public $id;
    public $name;
    public $ballIndex;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
        $this->ballIndex = 0;
    }
}