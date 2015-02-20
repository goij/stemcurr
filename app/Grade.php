<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model {
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    /**
     * @var array
     */
    protected $fillable = ['number','string'];

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
