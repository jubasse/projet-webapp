<?php

namespace Model\Models;

use Model\Models\Scopes\WomanGenderScope;

/**
 * Class WomanModel
 * @package Model\Models
 */
class WomanModel extends AbstractModel
{
    /**
     * @return void
     */
    protected static function boot() : void
    {
        parent::boot();
        self::addGlobalScope(new WomanGenderScope);
    }
}
