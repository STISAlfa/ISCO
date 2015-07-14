<?php

class Answer extends Eloquent {
    
    protected $table  = "answer";
    
    public function Soal() {
        return $this->belongTo('Soal','question_id');
    }
    
}
