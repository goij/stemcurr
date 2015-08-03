<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';
    protected $fillable = ['name,subcategory,parent_category_id'];



    public function standards()
    {
        return $this->hasMany('App\Standard');
    }

}
