<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marriage extends Model
{
   //protected $dates = ['groom_dob','bride_dob','fw_dob',];
    protected $fillable=[
      'groom_name',
      'groom_email',
      'groom_dob',
      'groom_nid',
      'groom_father_name',
      'groom_father_nid',
      'bride_name',
      'bride_email',
      'bride_dob',
      'bride_nid',
      'bride_father_name',
      'bride_father_nid',
      'fw_name',
      'fw_dob',
      'fw_nid',
      'fw_father_name',
      'fw_father_nid',
      'pin',
      'admin_id',
      'religion',
      'mortgage_money',
      'paid_mortgage_money',
      'money_confirmation',
      'bride_status',
      'groom_status',
      'married_groom_name',
      'married_groom_nid',
      'married_bride_name',
      'married_bride_nid'
    ];
    protected $hidden=['_token'];

  public function user(){
    return $this->belongsTo(User::class);
  }
  public function SuperAdmin(){
    return $this->belongsTo(SuperAdmin::class);
  }
  public function admin(){
    return $this->belongsTo(Admin::class);
  }


}
