<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    /*
     * Table name
     */
    protected $table = 'todos';

    /*
     * Fillable fields for protecting mass assignment vulnerability
     */
    protected $fillable = [
        'name',
        'category_id',
        'user_id'
    ];

    /*
     * Eloquent attribute casting
     */
    protected $casts = [
        'complete' => 'boolean'
    ];

    public function category()
    {
        return $this->belongsTo('App\Categories');
    }
}
