<?php

namespace App\Business\Task\Persistence\Entity;

use \Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: Fiete
 * Date: 26.08.2017
 * Time: 12:34
 */
class Task extends Model
{
    protected $table = 'tasks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'project',
        'creator',
        'assignee',
        'dueDate',
        'status',
        'created_at',
        'updated_at'
    ];

    public function project() {
        return $this->hasOne('App\Business\Project\Persistence\Entity\Project');
    }

    public function creator() {
        return $this->hasOne('App\Business\User\Persistence\Entity\User');
    }

    public function assignee() {
        return $this->hasOne('App\Business\User\Persistence\Entity\User');
    }

    public function status() {
        return $this->hasOne('App\Business\Status\Persistence\Entity\Status');
    }

}