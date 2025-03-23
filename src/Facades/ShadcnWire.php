<?php

namespace Kleppinger\ShadcnWire\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kleppinger\ShadcnWire\ShadcnWire
 */
class ShadcnWire extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Kleppinger\ShadcnWire\ShadcnWire::class;
    }
}
