<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class FacadeHelper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'helpers';
    }
}