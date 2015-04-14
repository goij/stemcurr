<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Asset extends Model {

	protected $table = 'assets';

    protected $fillable = ['user_id','path','filename','filesize'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function delete(){
        parent::delete();
        Storage::delete('upload/' . $this->user->username . '/' . $this->filename);
    }
}
