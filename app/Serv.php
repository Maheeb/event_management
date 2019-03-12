<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Serv
 *
 * @property int $id
 * @property string $title
 * @property string $name
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Serv newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Serv newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Serv query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Serv whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Serv whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Serv whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Serv whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Serv whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Serv whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $slug
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Serv whereSlug($value)
 */
class Serv extends Model
{
    //
    protected $fillable=['title','slug','image'];
}
