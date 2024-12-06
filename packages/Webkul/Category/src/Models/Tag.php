<?php
namespace Webkul\Category\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Tag\Contracts\Tag as TagContract;
use Webkul\User\Models\UserProxy;
use Webkul\Tag\Models\Tag as BaseTag;


class Tag extends BaseTag
{
    protected $table = 'tags';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'color',
        'user_id',
    ];

    /**
     * Get the user that owns the tag.
     */
    public function user()
    {
        return $this->belongsTo(UserProxy::modelClass());
    }
}
