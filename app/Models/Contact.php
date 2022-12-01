<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected  $fillable =['name' , 'email', 'phone' , 'message'];



    public static function deleteContact()
    {
        return [
            'contact_id' => 'required|exists:contacts,id'
        ];
    }
    public static function rules()
    {
        return [
            'name' => 'required|min:5',
            'email' => 'required|email|min:5',
            'phone' => 'required|min:5',
            'message' => 'required|min:5',
        ];
    }
}
