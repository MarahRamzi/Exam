<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Authenticatable
{
    use HasFactory , SoftDeletes;
    
    public function company_branches(){
        return $this->hasMany(Company_branch::class , 'company_id' , 'id');
    }
}
