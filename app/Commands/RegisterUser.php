<?php namespace App\Commands;

use App\CommandBus\Command;

class RegisterUser implements Command
{
    public $emailAddress;
    public $password;
}