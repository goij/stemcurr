<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model {

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'lessons';

    /**
     * @var array
     */
    protected $fillable = ['title', 'summary', 'commentary'];

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions(){
        return $this->hasMany('App\Question');
    }
}
