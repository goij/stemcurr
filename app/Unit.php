<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model {

    /**
     * @var array
     */
	protected $fillable = ['name'];

    /**
     * @var array
     */
    protected $guarded = ['id'];

}
