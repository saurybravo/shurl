<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\URL
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\URL newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\URL newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\URL query()
 * @mixin \Eloquent
 */
class URL extends Model
{
    protected $table = 'urls';
    protected $primaryKey = 'token';
    protected $fillable = [
        'token', 'url', 'http_code'
    ];
}
