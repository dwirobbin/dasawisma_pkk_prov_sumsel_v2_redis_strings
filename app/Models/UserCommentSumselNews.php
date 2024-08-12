<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserCommentSumselNews extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'user_comments_sumsel_news';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'user_id',
        'sumsel_news_id',
        'body',
        'comment_id',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function sumselNews(): BelongsTo
    {
        return $this->belongsTo(SumselNews::class, 'sumsel_news_id', 'id');
    }

    public function childrens()
    {
        return $this->hasMany(Self::class, 'comment_id', 'id');
    }

    public function likeCommentSumselNews(): HasMany
    {
        return $this->hasMany(UserLikeCommentSumselNews::class, 'comment_id', 'id');
    }

    public function totalLikedCommentByUsers(): int
    {
        return $this->likeCommentSumselNews()->count();
    }
}
