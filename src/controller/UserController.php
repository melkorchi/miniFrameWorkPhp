<?php

    class UserController {

        public function login($email, $pass) {
            $fix = new InstanceFixtures();
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                
            }
        }
    }