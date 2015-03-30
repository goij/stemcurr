<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Standard extends Model {
    use SoftDeletes;
    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
	protected $fillable=['name','category','link'];

    /**
     * @var array
     */
    protected $guarded=['id'];

    public function questions(){
        return $this->belongsToMany('App\Question');
    }
}
