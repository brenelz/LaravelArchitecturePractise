<?php namespace App\CommandBus;

interface Handler {
    public function handle($command);
}