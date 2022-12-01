<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected  $fillable = ['name', 'title', 'image'];

    public function getImageAttribute($value)
    {
        return 'images/teams/' . $value;
    }

    public static function deleteTeam()
    {
        return [
            'team_id' => 'required|exists:teams,id'
        ];
    }
    public static function rules()
    {
        return [
            'name' => 'required|min:5',
            'title' => 'required|min:5',
        ];
    }
}
