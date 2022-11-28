<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'slug' , 'icon' , 'description' , 'client' , 'category'];

    public function getIconAttribute($value)
    {
        return 'images/portfolios/' . $value;
    }

    public static function deletePortfolio()
    {
        return [
            'portfolio_id' => 'required|exists:portfolios,id'
        ];
    }
    public static function rules(){
        return [
            'name' => 'required|min:5',
            'slug' => 'required|min:5',
            'description' => 'required|min:5',
            'client' => 'required|min:5',
            'category' => 'required|min:5',
        ];
    }

}
