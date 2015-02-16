<?php
// file: app/models/Stat.php

class Stat extends Eloquent {

    protected $hidden = ['created_at','updated_at'];

    public function quiz()
    {
        return $this->belongsTo('Quiz');
    }

}
