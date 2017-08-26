<?php

namespace App\Business\Status\Persistence\Entity;

use \Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: Fiete
 * Date: 26.08.2017
 * Time: 12:52
 */
class Status extends Model
{
    protected $table = 'status';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}