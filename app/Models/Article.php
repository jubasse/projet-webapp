<?php

namespace Model\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Media;
use Spatie\Tags\HasTags;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Spatie\Tags\Tag;

/**
 * Model\Models\Article
 *
 * @property int $id
 * @property string $slug
 * @property string $title
 * @property bool $published
 * @property Carbon $published_at
 * @property string|null $content
 * @property int|null $author_id
 * @property Carbon|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read null|string $article_slug
 * @property-read Collection|Media[] $media
 * @property Collection|Tag[] $tags
 * @property-read User $author
 * @property-read User $publisher
 * @method static Builder|Article findSimilarSlugs($attribute, $config, $slug)
 * @method static bool|null forceDelete()
 * @method static Builder|Article onlyTrashed()
 * @method static bool|null restore()
 * @method static Builder|Article whereAuthorId($value)
 * @method static Builder|Article whereContent($value)
 * @method static Builder|Article whereCreatedAt($value)
 * @method static Builder|Article whereDeletedAt($value)
 * @method static Builder|Article whereId($value)
 * @method static Builder|Article wherePublished($value)
 * @method static Builder|Article wherePublishedAt($value)
 * @method static Builder|Article wherePublishedBy($value)
 * @method static Builder|Article whereSlug($value)
 * @method static Builder|Article whereTitle($value)
 * @method static Builder|Article whereUpdatedAt($value)
 * @method static Builder|Article withAllTags($tags, $type = null)
 * @method static Builder|Article withAnyTags($tags, $type = null)
 * @method static Builder|Article withTrashed()
 * @method static Builder|Article withoutTrashed()
 * @mixin \Eloquent
 */
class Article extends Model
{
    use Sluggable, SluggableScopeHelpers, HasTags, SoftDeletes, HasMediaTrait;

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
    protected $hidden = ['article_slug'];

    /**
     * @var array
     */
    protected $dates = ['deleted_at', 'published_at'];

    /**
     * @return BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function publisher() : BelongsTo
    {
        return $this->belongsTo(User::class, 'published_by', 'id');
    }

    /**
     * @return null|string
     */
    public function __toString() : ?string
    {
        return "{$this->attributes['title']}";
    }

    /**
     * @return null|string
     */
    public function getArticleSlugAttribute(): ?string
    {
        $now = (string) Carbon::now(config('app.timezone'))->format('Y-m-d');
        return "{$now} {$this->__toString()}";
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopePublished(Builder $query) : Builder
    {
        return $query->where('published', '=', true);
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopeLatest(Builder $query) : Builder
    {
        return $query->orderByDesc('created_at');
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopeLastPublished(Builder $query) : Builder
    {
        return $query->published()->orderByDesc('published_at');
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable() : array
    {
        return [
            'slug' => ['source' => 'article_slug']
        ];
    }
}
