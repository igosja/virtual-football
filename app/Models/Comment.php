<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Comment
 * @package App\Models
 *
 * @property int id
 * @property int commentable_id
 * @property string commentable_type
 * @property float created_at
 * @property string text
 * @property float updated_at
 * @property int user_id
 */
class Comment extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'commentable_id',
        'commentable_type',
        'text',
        'user_id',
    ];
}
