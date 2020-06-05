<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Calculate ;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    private $calculate;

    // public function setup()
    // {
    //     $this->cal = new Calculate();
    // }

    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testPushAndPop()
    {

        $stack = array();
        $this->assertEquals(0, count($stack));
        $this->assertEquals(2, $this->sum(2, 1));
    }

    public function sum($a, $b)
    {

        // return  $this->calculate = 2;
        //    return $cal->add($a,$b);
        // $var = new Calculate();
        // $cal = Calculate::add($a, $b);
         return  ($a+$b);
    }
}
