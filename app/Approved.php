<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Approved extends Model
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
    'admin_id',
    'religion',
    'mortgage_money',
    'paid_mortgage_money',
    'money_confirmation'
  ];
  protected $hidden=['_token'];

  public function admin(){
    return $this->belongsTo(Admin::class);
  }
  public function superadmin(){
    return $this->belongsTo(SuperAdmin::class);
  }
}
