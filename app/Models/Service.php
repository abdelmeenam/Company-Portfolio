<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected  $fillable = ['name', 'description', 'icon'];

    public function getIconAttribute($value)
    {
        return 'images/services/' . $value;
    }

    public static function deleteService()
    {
        return [
            'service_id' => 'required|exists:services,id'
        ];
    }

    public static function rules()
    {
        return [
            'name' => 'required|min:5',
            'description' => 'required|min:5',
        ];
    }
}