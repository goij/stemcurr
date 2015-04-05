<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

    /**
     * @var string
     */
	protected $table = 'news';

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @var array
     */
    protected $fillable = ['user_id','text','title'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(){
        return $this->belongsTo('App\User');
    }

}
