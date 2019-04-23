<?php
class Form{

    public $surround = 'p';
    
    private function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    public function formstart(){
        return $this->surround('<form action="index.php" method="get">');

    }

    public function input($name){
       return $this->surround('<input type="text" name="' . $name . '">');

    }

    public function gender(){
        return $this->surround('<select name="gender"><option value="Man">Man</option><option value="Woman">Woman</option></select>');
    }


    public function textarea(){
        return $this->surround('<textarea></textarea>');
    }

    public function radiobutton(){
        return $this->surround('<input type="radio" name="status" value="single">Single<br><input type="radio" name="status" value="Married">Married');
    }

    public function submit(){
        return $this->surround('<button type="submit">submit</button>');
    }

    public function formend(){
        return $this->surround('</form>');

    }

}