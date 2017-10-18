<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * Массово присваиваемые атрибуты.
     *
     * @var array
     */
    protected $fillable = ['name', 'user_id'];

    /**
     * Получить все задачи пользователя.
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    /**
     * Получить пользователя - владельца данной задачи
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
