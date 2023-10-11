<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'todo_list_id', 'status_id', 'name',
    ];
    public function todoList()
    {
        return $this->belongsTo(TodoList::class);
    }

    public function steps()
    {
        return $this->hasMany(Step::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
