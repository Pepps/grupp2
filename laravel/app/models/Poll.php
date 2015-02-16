<?php
// file: app/models/Poll.php

class Poll extends Eloquent {

    protected $hidden = ['created_at','updated_at'];
    protected $appends = ['options'];

    public function stats()
    {
        return $this->hasMany('Stat');
    }

    public function getOptionsAttribute()
    {
        return array_flatten($this->stats()->get(['option'])->toArray());
    }
}
