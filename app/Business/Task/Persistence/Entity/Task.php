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
        'id',
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
        return $this->belongsTo('App\Business\Project\Persistence\Entity\Project', 'project');
    }

    public function creator() {
        return $this->belongsTo('App\Business\User\Persistence\Entity\User', 'creator');
    }

    public function assignee() {
        return $this->belongsTo('App\Business\User\Persistence\Entity\User', 'assignee');
    }

    public function status() {
        return $this->belongsTo('App\Business\Status\Persistence\Entity\Status', 'status');
    }

}