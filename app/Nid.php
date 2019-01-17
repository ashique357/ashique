<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nid extends Model
{
  protected $table="Nids";
  protected $fillable=['name','nid_number','birth_date','father_name','mother_name'];

    public function user(){
      return $this->belongsTo(User::class);
    }
    public function marriage(){
      return $this->belongsTo(Marriage::class);
    }


}
