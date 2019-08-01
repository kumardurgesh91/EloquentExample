<?php

use Jenssegers\Mongodb\Eloquent\Model;


class MongoUser extends Model  {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'id', 'password'
    ];
    protected $connection = 'mongodb';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
