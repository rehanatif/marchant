<?php
namespace App\Helper;
use Illuminate\Support\Facades\Facade;

class UtilityFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'uh';
    }
}