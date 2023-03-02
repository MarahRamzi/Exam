<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Company_branch extends Authenticatable
{
    use HasFactory,softDeletes;

    public function company(){
        return $this->belongsTo(Company::class , 'company_id' , 'id');
    }


}