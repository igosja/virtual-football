<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class News
 * @package App\Models
 *
 * @property int id
 * @property float created_at
 * @property string text
 * @property string title
 * @property float updated_at
 * @property int user_id
 */
class News extends AbstractModel
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = [
        'text',
        'title',
        'user_id',
    ];
}
