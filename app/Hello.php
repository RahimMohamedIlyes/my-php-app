<?php

namespace App;

use Carbon\Carbon;

class Hello
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): string
    {
        return "Hello, " . $this->name . "!";
    }

    public function carbonTest(){

        // Create a Carbon date object for now
        $now = Carbon::now();

        // Format and display
        echo "Current date and time: " . $now->toDayDateTimeString() . PHP_EOL;

        // Add 10 days
        $future = $now->addDays(10);
        echo "10 days later: " . $future->toFormattedDateString() . PHP_EOL;

        // You can also localize (optional)
        Carbon::setLocale('fr');
        return "En français : " . $future->isoFormat('LLLL') . PHP_EOL;
    }
}
