<?php

class html{

    public $surround = 'p';

    private function surround($html){
    return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    public function headerstart(){
    return $this->surround('<header><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>ಠ_ಠ</title><link rel="stylesheet" type="text/css" href="main.css"></header>');
    }

    public function img(){
    return $this->surround('<canvas id="canvas" width="300" height="300"></canvas>');
    }

    public function link(){
    return $this->surround('<a href="http://www.google.be">link</a>');
    }

    public function javascript(){
    return $this->surround('<script src="java.js"></script>');
    }


}