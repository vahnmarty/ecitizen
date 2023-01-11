<?php

namespace App\Models;

use App\Enums\ArticleStatus;
use App\Enums\AnnouncementType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory;
    
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'contents' => 'array',
        'type' => AnnouncementType::class
    ];

    public function publish()
    {
        $this->update([
            'published_at' => now(),
            'status' => ArticleStatus::Published
        ]);
    }

    public function unpublish()
    {
        $this->update([
            'published_at' => null,
            'status' => ArticleStatus::PendingReview
        ]);
    }

    public function isPublished()
    {
        return $this->published_at ? true : false;
    }
}
