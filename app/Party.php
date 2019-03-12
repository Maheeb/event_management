<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Party
 *
 * @property int $id
 * @property int $author_id
 * @property string $image
 * @property string $title
 * @property string $et
 * @property string $duration
 * @property string $loc
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $author
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Party newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Party newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Party query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Party whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Party whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Party whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Party whereEt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Party whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Party whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Party whereLoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Party whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Party whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Party extends Model
{
    //

    protected $fillable=['image','title','et','duration','loc'];
    public function author(){
        return $this->belongsTo(User::class);
    }
}
