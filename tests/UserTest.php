<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{
    public function testReturnsFullName() {
        require 'User.php';

        $user = new User();
        $user->first_name = "Ulka";
        $user->surname = "Bendale";

        $this->assertEquals("Ulka Bendale", $user->getFullName());
    }

    public function testReturnsEmptyFullName() {
        $user = new User();

        $this->assertEquals("", $user->getFullName());
    }

    /**
     * @test
     */
    public function UserHasFirstName() {
        $user = new User();
        $user->first_name = "Ulka";

        $this->assertEquals("Ulka", $user->first_name);
    }

    /**
     * @test
     */
    public function user_has_first_name() {
        $user = new User();
        $user->first_name = "Ulka";

        $this->assertEquals("Ulka", $user->first_name);
    }
}