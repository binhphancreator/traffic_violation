<?php

namespace GoSafer\App;

use App\Model\User;

class Auth 
{
    private Session $session;
    private User $user;
    public function __construct(Session $session)
    {
        $this->session = $session;
        $this->resolveUser();
    }

    public function loggined()
    {
        return $this->session->get('auth', false);
    }

    public function login($email, $password)
    {
        $user = (new User)->where('email', $email)->first();
        if($user && password_verify($password, $user->password)) {
            $this->session->set('auth', true);
            $this->session->set('email', $email);
            $this->user = $user;
            return true;
        }

        return false;
    }

    public function logout()
    {
        $this->session->unset('auth');
        $this->session->unset('email');
    }

    private function resolveUser()
    {
        if(!$this->loggined()) return;
        $email = $this->session->get('email');
        $this->user = (new User)->where('email', $email)->first();
    }

    public function user() : User
    {
        return $this->user;
    }
}
