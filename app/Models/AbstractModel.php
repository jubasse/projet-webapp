<?php

namespace Model\Models;

use Carbon\Carbon;
use Model\Models\Traits\Genderable;
use Spatie\Tags\Tag;
use Spatie\Tags\HasTags;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Model\Models\Model
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $slug
 * @property int $height
 * @property int|null $waist
 * @property string|null $chest
 * @property string|null $cap_size
 * @property string|null $hips
 * @property string|null $shoe_size
 * @property string|null $hair
 * @property string|null $eyes
 * @property string $sex
 * @property int|null $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read null|string $fullname
 * @property-read User $creator
 * @property Collection|Tag[] $tags
 * @method static Builder|AbstractModel findSimilarSlugs($attribute, $config, $slug)
 * @method static bool|null forceDelete()
 * @method static Builder|AbstractModel onlyTrashed()
 * @method static bool|null restore()
 * @method static Builder|AbstractModel men($value)
 * @method static Builder|AbstractModel woman($value)
 * @method static Builder|AbstractModel whereCapSize($value)
 * @method static Builder|AbstractModel whereChest($value)
 * @method static Builder|AbstractModel whereCreatedAt($value)
 * @method static Builder|AbstractModel whereCreatedBy($value)
 * @method static Builder|AbstractModel whereDeletedAt($value)
 * @method static Builder|AbstractModel whereEyes($value)
 * @method static Builder|AbstractModel whereFirstName($value)
 * @method static Builder|AbstractModel whereHair($value)
 * @method static Builder|AbstractModel whereHeight($value)
 * @method static Builder|AbstractModel whereHips($value)
 * @method static Builder|AbstractModel whereId($value)
 * @method static Builder|AbstractModel whereLastName($value)
 * @method static Builder|AbstractModel whereSex($value)
 * @method static Builder|AbstractModel whereShoeSize($value)
 * @method static Builder|AbstractModel whereSlug($slug)
 * @method static Builder|AbstractModel whereUpdatedAt($value)
 * @method static Builder|AbstractModel whereWaist($value)
 * @method static Builder|AbstractModel withAllTags($tags, $type = null)
 * @method static Builder|AbstractModel withAnyTags($tags, $type = null)
 * @method static Builder|AbstractModel withTrashed()
 * @method static Builder|AbstractModel withoutTrashed()
 * @mixin \Eloquent
 */
abstract class AbstractModel extends BaseModel
{
    use Sluggable, SluggableScopeHelpers, HasTags, SoftDeletes, Genderable;

    /**
     * @var string
     */
    protected $table = 'models';

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
    protected $appends = ['fullname'];

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @return BelongsTo
     */
    public function creator() : BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    /**
     * @return null|string
     */
    public function __toString() : ?string
    {
        return "{$this->attributes['first_name']} {$this->attributes['last_name']}";
    }

    /**
     * @return null|string
     */
    public function getFullnameAttribute() : ?string
    {
        return $this->__toString();
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable() : array
    {
        return [
            'slug' => ['source' => ['fullname']]
        ];
    }
}
