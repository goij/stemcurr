<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alliance extends Model {
    use SoftDeletes;
	//
    /**
     * @var array
     */
    protected $guarded = ['id'];
    /**
     * @var array
     */
    protected $fillable = ['name'];
    /**
     * @var array
     */
    protected $table = 'user_alliance';

    public function user(){
        return $this->belongsTo('App\User');
    }

}
