<?php namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Question extends Model {
    use SoftDeletes;
    /**
     * @var array
     */
	protected $fillable = ['topic_id','title','evidence','course_align'];

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
        return $this->belongsToMany('App\Standard', 'question_standard', 'question_id', 'standard_id');
    }



    public function numResponses(){
        return Response::where('question_id','=',$this->id)->count();
    }


    /**
     *
     */

}
