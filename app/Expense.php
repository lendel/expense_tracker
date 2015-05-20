<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'expenses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'company', 'link', 'price', 'renewal'];

    public function User(){
        return $this->belongsToMany('App\User')->withPivot('price_charged');
    }
}
