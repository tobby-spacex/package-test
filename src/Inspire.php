<?php

namespace Fhsinchy\Inspire;

class Inspire
{
    public function justDoIt() {
        $response = [
            "quote" => "The greatest discovery of all time is that a person can change their future by merely changing their attitude.",
            "author" =>  "Oprah Winfrey"
        ];

        return $response['quote'] . ' -' . $response['author'];
    }
}
