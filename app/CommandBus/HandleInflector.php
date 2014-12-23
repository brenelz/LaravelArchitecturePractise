<?php namespace App\CommandBus;

use Tactician\Handler\MethodNameInflector\MethodNameInflector;

class HandleInflector implements MethodNameInflector {
    public function inflect($command, $commandHandler) {
        return 'handle';
    }
}