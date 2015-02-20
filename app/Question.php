<?php namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Question extends Model {
    use SoftDeletes;
    /**
     * @var array
     */
	protected $fillable = ['lesson_id','title','evidence'];

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lesson(){
        return $this->belongsTo('App\Lesson');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function standards(){
        return $this->belongsToMany('');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function subcategory(){
        return $this->belongsToMany('');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function labs(){
        return $this->belongsToMany('');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function partners(){
        return $this->belongsToMany('');
    }
}
