<?php

namespace Model\Models;

use Carbon\Carbon;
use Spatie\MediaLibrary\Media;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;

/**
 * Model\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property int|null $created_by
 * @property int|null $trashed_by
 * @property Carbon|null $deleted_at
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Article[] $articles
 * @property-read Collection|Media[] $media
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read Collection|Permission[] $permissions
 * @property-read Collection|Role[] $roles
 * @method static bool|null forceDelete()
 * @method static Builder|User onlyTrashed()
 * @method static Builder|User permission($permissions)
 * @method static bool|null restore()
 * @method static Builder|User role($roles)
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereCreatedBy($value)
 * @method static Builder|User whereDeletedAt($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereFirstName($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereLastName($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereTrashedBy($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @method static Builder|User withTrashed()
 * @method static Builder|User withoutTrashed()
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable, HasRoles, SoftDeletes, HasMediaTrait;

    /**
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:sO';

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @return HasMany
     */
    public function articles() : HasMany
    {
        return $this->hasMany(Article::class, 'user_id', 'id');
    }

    /**
     * @return array|Collection|Article[]
     */
    public function deletedArticles()
    {
        return $this->articles()->trashed()->where('trashed_by', $this->attributes['id'])->get();
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return "{$this->attributes['first_name']} {$this->attributes['last_name']}";
    }
}
