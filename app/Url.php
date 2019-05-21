<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Url extends Model
{
    use SoftDeletes;

    protected $table = 'urls';
    protected $fillable = [
        'token', 'referrer_url', 'visits'
    ];

    public function getShortenedUrlAttribute ()
    {
        return config('app.url') . '/' . $this->token;
    }
}
