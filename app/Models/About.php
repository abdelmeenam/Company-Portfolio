<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected  $fillable = [ 'date','name', 'description', 'icon'];

    public function getIconAttribute($value)
    {
        return 'images/abouts/' . $value;
    }

    public static function deleteAbout()
    {
        return [
            'about_id' => 'required|exists:abouts,id'
        ];
    }
    public static function rules()
    {
        return [
            'name' => 'required|min:5',
            'date' => 'required|min:5',
            'description' => 'required|min:5',
        ];
    }
}
