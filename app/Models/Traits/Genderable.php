<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 24/09/2017
 * Time: 17:54
 */

namespace Model\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Genderable
{
    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopeMen(Builder $query) : Builder
    {
        return $query->where('sex', '=', 'M');
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopeWoman(Builder $query) : Builder
    {
        return $query->where('sex', '=', 'F');
    }
}
