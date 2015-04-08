<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model {

    /**
     * @var array
     */
	protected $guarded = ['id'];
    /**
     * @var array
     */
    protected $fillable = ['user_id'];
    /**
     * @var array
     */
    protected $table = 'user_notification';

    public function user(){
        return $this->belongsTo('App\User');
    }

}
