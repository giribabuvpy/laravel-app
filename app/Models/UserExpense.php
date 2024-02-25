<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExpense extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','item_id','amount'];

    public function expenseCategory() {
        return $this->belongsTo(ExpenseItem::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
