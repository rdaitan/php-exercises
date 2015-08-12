<?php
class Coffee {
    public $name;
    public $brand;
    public $net_wt;
    
    public function getFullName() {
        return $this->upperCaseBrand() . " {$this->name}";
    }
    
    public function getInfo() {
        return "Brand: {$this->brand}\nName: {$this->name}\nNet Wt. {$this->net_wt}";
    }
        
    
    private function upperCaseBrand() {
        return strtoupper($this->brand);
    }
    
    static function printp(Coffee $coffee) {
        print("<p>{$coffee->getFullName()} | {$coffee->net_wt}</p>");
    }
    
    public function __set($name, $value) {
        $this->{$name} = $value;
    }
    
    public function __get($name) {
        return $this->{$name};
    }
    
    // for method overloading
    public function __call($name, $args) {
        return call_user_func($this->{$name}, $args);
    }
}