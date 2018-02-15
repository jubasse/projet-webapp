<?php

namespace Model\Models;

use Model\Models\Scopes\ManGenderScope;

/**
 * Class ManModel
 * @package Model\Models
 */
class ManModel extends AbstractModel
{
    /**
     * @return void
     */
    public static function boot() : void
    {
        parent::boot();
        self::addGlobalScope(new ManGenderScope);
    }
}
