<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function showAllEmployees()
    {
        return Employee::where('company_id', '=', $this->getKey())->get();
    }   
}