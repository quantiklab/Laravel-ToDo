<?php
/**
 * Created by PhpStorm.
 * User: limbo
 * Date: 8/6/15
 * Time: 9:07 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    /**
     * Table name
     *
     * @var string
     */
    protected $name = 'categories';


    /**
     * Fillable fields for protecting mass assignment vulnerability
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];


    public function todos()
    {
        return $this->hasMany('App\Todo');
    }

}