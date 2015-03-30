<?php namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Question extends Model {
    use SoftDeletes;
    /**
     * @var array
     */
	protected $fillable = ['topic_id','title','evidence'];

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function topic(){
        return $this->belongsTo('App\Topic');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function standards(){
        return $this->belongsToMany('App\Standard');
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

    /**
     *
     */

}
