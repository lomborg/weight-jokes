<?php

namespace Lomborg\WeightJokes\Tests;

use Lomborg\WeightJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_return_a_random_joke(){

        $jokes = new JokeFactory([
          'this is a joke',
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('this is a joke', $joke);

    }

    public function it_return_a_predefined_joke(){

        $familyJokes = [
            'Yo momma is so fat when she got on the scale it said, "I need your weight not your phone number.',
            "Yo momma is so fat, I took a picture of her last Christmas and it's still printing.",
            'Yo momma´s so fat and old when God said, "Let there be light," he asked your mother to move out of the way.',
        ];

        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $familyJokes);

    }
}