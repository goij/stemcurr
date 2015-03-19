<?php namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Topic extends Model {
    use SoftDeletes;
    /**
     * @var string
     */
    protected $table = 'topics';

    /**
     * @var array
     */
    protected $fillable = ['title', 'summary', 'commentary','grade_id','unit_id'];

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function grade(){
        return $this->belongsTo('App\Grade');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unit(){
        return $this->belongsTo('App\Unit');
    }
}
