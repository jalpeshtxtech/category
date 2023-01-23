<?php

namespace Jalpeshtxtech\Category\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
// use App\Traits\ColumnFillable;

class Category extends Model
{
    use Notifiable;
    // use ColumnFillable;

    protected $fillable = [
        'category_name',
        'description'
    ];

    protected $guarded = [];
    protected $table = 'category';
}
