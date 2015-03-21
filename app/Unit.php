<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Unit extends Model {
    use SoftDeletes;
    /**
     * @var array
     */
	protected $fillable = ['name']; 

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessons(){
        return $this->hasMany('App\Lesson');
    }
}
