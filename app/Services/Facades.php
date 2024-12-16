<?php
namespace App\Services;
use Illuminate\Support\Facades\Facade;

class Facades extends Facade {
    public static function getFacadeAccessor() {
        return "learn-service";
    }
}
