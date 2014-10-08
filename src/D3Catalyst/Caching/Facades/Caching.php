<?php namespace D3Catalyst\Caching\Facades;

use Illuminate\Support\Facades\Facade;

class Caching extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'caching'; }

}