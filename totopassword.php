<?php

namespace media;
//use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;

public function register(UserPasswordEncoderInterface $encoder)
{
    // whatever *your* User object is
    $user = new App\Entity\User();
    $plainPassword = 'ryanpass';
    $encoded = $encoder->encodePassword($user, $plainPassword);
    
    $user->setPassword($encoded);
}