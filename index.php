<?php

require "Color.php";
require "Ball.php";
require "Basket.php";
require "functions.php";



/**
 * Declaring variables
 */
$colors = [];
$balls = [];
$baskets = [];

/**
 * Initializing colors
 */
$colors = [
    new Color(1, 'red'),
    new Color(2, 'blue'),
    new Color(3, 'green'),
    new Color(4, 'yellow'),
    new Color(5, 'black'),
    new Color(6, 'white')
];


/**
 * Initializing balls
 */
for ($i = 0; $i < 9; $i++) {
    $balls[] = new Ball($i+1, $colors[rand(0, 2)]);
}


/**
 * Initializing baskets
 */
for ($i = 0; $i < 3; $i++) {
    $baskets[] = new Basket($i+1, $colors[rand(0, 2)]);
}

// adding one extra basket with no color assigned
$baskets[] = new Basket(99, new Color(null, null), sizeof($balls));


// Saving unsorted balls to var (TEMPORARY)
$unsortedBalls = $balls;


/**
 * Increment priority of balls in certain condition
 */
foreach ($balls as $ball) {
    $ball->calculatePriority($balls, $baskets);
}


/**
 * Sort the balls by its priority in DESC order
 */
usort($balls, function($a, $b) {
    return -($a->priority <=> $b->priority);
});


// Maximum balls count for each basket must be:
$maxBallsCount = ceil(count($balls) / (count($baskets) - 1));


/**
 * Putting balls into baskets using algoritm
 */
foreach ($balls as $ball) {

    $length = sizeof($baskets);
    $i = 0;

    // if (ball's color is the same as current basket) OR (balls count of basket equals $maxBallsCount)
    // then go to the next basket; NOTE: when $i = $length-1, extra basket is used
    while ($i < $length && ($baskets[$i]->color->id == $ball->color->id || $baskets[$i]->ballsCount == $maxBallsCount)) {
        $i++;
    }

    // Push ball into basket
    $baskets[$i]->push($ball);

    // Sort the baskets by balls count (in ASC order)
    usort($baskets, function($a, $b) {
        return ($a->ballsCount <=> $b->ballsCount);
    });


    console_log($baskets);
}


console_log("Max balls count: {$maxBallsCount}");


require './index.view.php';