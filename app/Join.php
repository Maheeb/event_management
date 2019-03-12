<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Join
 *
 * @property int $id
 * @property string $name
 * @property int $number
 * @property string $state
 * @property int $zip
 * @property string $email
 * @property string $pm
 * @property string $city
 * @property int $tn
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Join newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Join newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Join query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Join whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Join whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Join whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Join whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Join whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Join whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Join whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Join wherePm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Join whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Join whereTn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Join whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Join whereZip($value)
 * @mixin \Eloquent
 */
class Join extends Model
{
    //
    protected $fillable =['name','number','state','zip','email','pm','city','tn','message'];





}
