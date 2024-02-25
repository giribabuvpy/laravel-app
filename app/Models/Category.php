<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ExpenseItem;
use Illuminate\Database\Eloquent\Relations\HasMany; 

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['id','category_name'];

    public function subcategory() {
        return $this->hasMany(ExpenseItem::class);
    }

}
