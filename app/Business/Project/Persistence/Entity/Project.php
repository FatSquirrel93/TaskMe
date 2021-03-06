<?php

namespace App\Business\Project\Persistence\Entity;

use \Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: Fiete
 * Date: 26.08.2017
 * Time: 12:34
 */
class Project extends Model
{
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'description',
        'creator',
        'created_at',
        'updated_at'
    ];

    public function creator() {
        return $this->belongsTo('App\Business\User\Persistence\Entity\User', 'creator');
    }

    public function tasks() {
        return $this->belongsToMany('App\Business\Task\Persistence\Entity\Task');
    }
}