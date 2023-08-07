<?php

namespace Domain\Blogging\Models;

use App\Traits\HasUuid;
use Domain\Blogging\Shared\Models\User;
use Illuminate\Database\Eloquent\Model;
use Domain\Blogging\Models\Builders\PostBuilder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use HasUuid;

    protected $fillable = [
        'uuid',
        'title',
        'body',
        'slug',
        'description',
        'user_id',
        'published'
    ];

    protected $casts = [
        'published' => 'boolean'
    ];

    public function getRouteKeyName(): string
    {
        return 'uuid';
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function newEloquentBuilder($query): PostBuilder 
    {
        return new PostBuilder(
           $query
        );
    }

}