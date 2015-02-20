<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model {

    /**
     * @var array
     */
    protected $fillable = ['number','string'];

    /**
     * @var array
     */
    protected $guarded = ['id'];

}
