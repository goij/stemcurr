<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model {

    /**
     * @var array
     */
	protected $guarded = ['id'];
    /**
     * @var string
     */
    protected $table = 'responses';
    /**
     * @var array
     */
    protected $fillable = ['user_id','question_id','evidence','comments'];

    /**
     * Custom defintion of pivot table and associated keys is necessary
     * We are reusing the same pivot table used for questions as we will for responses aka "Teacher-Questions"
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function standards(){
        return $this->belongsToMany('App\Standard', 'question_standard', 'question_id', 'standard_id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

}
