<?php
class Person {
    public $first = "Jake";
    private $last = "Luena";
    private $age = 24;
    private $motto = "Stop being aggreable or you'll get exploited by others.";
}

class Pet extends Person {
    public function owner() {
        $greet = $this->first;
        return $greet;
    }
}

/**
 * Please read README.md starting line 22 about public/private/protected
 */

?>