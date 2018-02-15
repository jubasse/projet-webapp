<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 24/09/2017
 * Time: 19:33
 */

namespace Model\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Model\Models\ManModel;

class ManGenderScope implements Scope
{

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model|ManModel $model
     * @return void
     */
    public function apply(Builder $builder, Model $model): void
    {
        $builder->where('sex', '=', 'M');
    }
}
