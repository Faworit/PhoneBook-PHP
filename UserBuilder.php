<?php


class UserBuilder
{
    function buildUser($result){
        $user = new User($result['id'], $result['name'], $result['surname'], $result['number']);

        return $user;
    }

}