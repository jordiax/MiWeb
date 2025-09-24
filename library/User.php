<?php
    class User
    {
        public string $userName;
        public string $password;
        public array $roles;

        public function __construct(string $userName, string $password, array $roles)
        {
            $this->userName = $userName;
            $this->password = $password;
            $this->roles = $roles;
        }

        public function hasRole(string $role):bool
        {
            return in_array($role, $this->roles);
        }
    }