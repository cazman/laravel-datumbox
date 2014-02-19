<?php namespace Carwyn\LaravelDatumbox\Facades;

use Illuminate\Support\Facades\Facade;

class Datumbox extends Facade {
    
    protected static function getFacadeAccessor() {
        return 'Datumbox'; 
    }

}