<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model {

    /**
     * @var string
     */
	protected $table = 'units';
    /**
     * @var string
     */
    protected $guarded = 'id';
    /**
     * @var array
     */
    protected $fillable = ['overview','team_leader','team_members','non_profit_partners','corporate_partners','au_faculty','subject_id','grade_id'];

}
