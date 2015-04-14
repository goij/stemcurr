<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Standard extends Model {
    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
	protected $fillable=['name','category_id','link'];

    /**
     * @var array
     */
    protected $guarded=['id'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function categoryName(){
        return Category::where('id','=',$this->category_id)->first()->name;
    }

    public function questions(){
        return $this->belongsToMany('App\Question');
    }
}
