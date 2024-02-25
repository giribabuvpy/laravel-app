<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExpenseItem extends Model
{
    use HasFactory;

    protected $fillable = ['item_name','validation','category_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function itemExpense() {
        return $this->hasMany(UserExpense::class);
    } 
}