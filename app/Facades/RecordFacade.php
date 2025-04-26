<?php

namespace App\Facades;

use App\Services\RecordService;
use Illuminate\Support\Facades\Facade;

class RecordFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return RecordService::class;
    }
}
