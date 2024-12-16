<?php
namespace App\Services;
use Illuminate\Support\Facades\Facade;

class Messages extends Facade {
    public static function getFacadeAccessor(): string
    {
        return "messages";
    }
}
