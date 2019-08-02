<?php


namespace Lomborg\WeightJokes;

class JokeFactory
{
//    public function hello(){
//        echo 'Hello fat fuck';
//    }
    protected $jokes = [
        'Yo momma is so fat when she got on the scale it said, "I need your weight not your phone number.',
        "Yo momma is so fat, I took a picture of her last Christmas and it's still printing.",
        'Yo momma´s so fat and old when God said, "Let there be light," he asked your mother to move out of the way.',
    ];

    public function __construct(array $jokes = null){

        if($jokes){
            $this->jokes = $jokes;

        }

    }

    public function getRandomJoke(){
        return $this->jokes[array_rand($this->jokes)];
    }

}