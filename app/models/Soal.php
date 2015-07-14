<?php

class Soal extends Eloquent {
    
    protected $table  = "soal";
    
        
    public function Answer() {
            return $this->hasMany('Answer','question_id');
    }
    
    public function CorrectAnswer(){
        return $this->belongsTo('Answer','id_correct_answer');
    }
    
    public function User(){
        return $this->belongsTo('User','id_user');
    }
}
