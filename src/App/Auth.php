<?php

namespace GoSafer\App;

use App\Model\User;

class Auth 
{
    private Session $session;
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function loggined()
    {
        return $this->session->get('auth', false);
    }

    public function user() : User
    {
        if(!$this->loggined()) return null;
        $email = $this->session->get('email');

        return new User();
    }
}