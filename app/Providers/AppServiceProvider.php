<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Validator;
use App\Nid;
use App\Approved;
use App\Validators\CustomValidation;
use Illuminate\Http\Request;
use Carbon\Carbon;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
     public function boot()
     {
         Schema::defaultStringLength(191);

         // Validator::extend('age', function($attribute, $value, $parameters){
         //   $minAge = ( ! empty($parameters)) ? (int) $parameters[0] : 18;
         //    //dd(Carbon::now());
         //    return Carbon::now()->diff(new Carbon($value))->y >= $minAge;
         // });

         //if before married
          Validator::extend('before_married', function($attribute, $value, $parameters,$validator){
            if (isset($attribute)) {
              if ($attribute == 'groom_status') {
                if ($value =='true') {
                  $name=array_get($validator->getData(), $parameters[0] );
                  $nid_number=array_get($validator->getData(), $parameters[1]);
                  //$search=Approved::where('bride_nid','=',$nid_number)->get();
                  if (Approved::where('bride_nid','=',$nid_number)->count() > 0) {
                      return true;
                  }
                }
                else {
                  $name=array_get($validator->getData(), $parameters[0]="0");
                  $nid_number=array_get($validator->getData(), $parameters[1]="0");
                  $t['married_bride_name']=$parameters[0]=$name;
                  $t['married_bride_nid']=$parameters[1]=$nid_number;
                  return $t;
                }
              }

              if ($attribute == 'bride_status') {
                if ($value =='true') {
                  $name=array_get($validator->getData(), $parameters[0] );
                  $nid_number=array_get($validator->getData(), $parameters[1]);
                  if (Approved::where('groom_nid','=',$nid_number)->count() > 0) {
                      return true;
                  }
                }
                else {
                  $name=array_get($validator->getData(), $parameters[0]="0");
                  $nid_number=array_get($validator->getData(), $parameters[1]="0");
                  $t['married_groom_name']=$parameters[0]=$name;
                  $t['married_groom_nid']=$parameters[1]=$nid_number;
                  return $t;
                }
              }
            }
          });

         //Religion Validation
         Validator::extend('religion', function($attribute, $value, $parameters,$validator){
           if (isset($attribute)) {
               if ($value=='muslim') {
                 $money=array_get($validator->getData(), $parameters[0] );
                 $paid_money=array_get($validator->getData(), $parameters[1]);
                  $t['mortgage_money']=$parameters[0]=$money;
                  $t['paid_mortgage_money']=$parameters[1]=$paid_money;
                  return $t;

               }
               else {
                 $money=array_get($validator->getData(), $parameters[0]="0");
                 $paid_money=array_get($validator->getData(), $parameters[1]="0");
                 $t['mortgage_money']=$parameters[0]=$money;
                 $t['paid_mortgage_money']=$parameters[1]=$paid_money;
                 return $t;
               }
           }
         });

         //nid_verify Validator

         Validator::extend('nid_varify',function($attribute,$value,$parameters,$validator){
           if (!(empty($value))) {
             if (strlen($value)===17) {
              $candidate_name=array_get($validator->getData(), $parameters[0]);
              $dob=array_get($validator->getData(), $parameters[1]);
              $candidate_father_nid=array_get($validator->getData(), $parameters[2]);
              $candidate_father_name=array_get($validator->getData(), $parameters[3]);
              $candidate_dob=Carbon::createFromFormat('d-m-Y', $dob)->year;
               $temp_birth=substr($value,0,4);
               if ($temp_birth ==$candidate_dob) {
                 if (strlen($candidate_father_nid)===17) {
                   $temp_father_birth_year=substr($candidate_father_nid,0,4);
                   $father_birth_year_nid=Nid::where('nid_number','=',$candidate_father_nid)->select('birth_date')->first();
                   $get_father_birth_year_nid=Carbon::createFromFormat('d-m-Y', $father_birth_year_nid['birth_date'])->year;
                   if ($get_father_birth_year_nid ==$temp_father_birth_year) {
                     $get_father_name_nid=Nid::where('nid_number','=',$candidate_father_nid)->select('name')->first();
                     if ($get_father_name_nid->name ===$candidate_father_name) {
                       return true;
                     }
                     return false;
                   }
                   return false;
                 }
                 return false;
               }
               return false;
             }
             return false;
           }
           return false;
         });

     }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function rules() {

}
}
