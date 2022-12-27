<?php

    class UserData {
        public $userName;
        private $password;
        private $email;
        protected $nickname;

        public function __construct($userName, $password, $email, $nickname) {
            $this->userName = $userName;
            $this->password = $password;
            $this->email = $email;
            $this->nickname = $nickname;
        }

        public function dashboardGreet($userName) {
            $this->userName = $userName;
            return "Welcome to your dashboard $this->userName!";
        }

        public function showPass() {
            return $this->password;
        }
    }