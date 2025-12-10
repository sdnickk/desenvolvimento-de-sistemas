<?php
class Retangulo 
{ 
var $x1, $y1, $x2, $y2; 
    function Retangulo($v1, $v2, $v3, $v4) 
    { 
        $this->x1 = $v1; $this->y1 = $v2; 
        $this->x2 = $v3; $this->y2 = $v4; 
    } 
    function altura() 
    { 
        return abs($this->y2 - $this->y1); 
    } 
    function largura() 
    { 
        return abs($this->x2 - $this->x1); 
    } 
    function area() 
    { 
        return $this->largura() * $this->altura(); 
    } 
    function perimetro() 
    { 
        return 2 * $this->largura() + 2 * $this->altura(); 
    }
} 

$retang1 = new Retangulo(2, 2, 25, 10); 
$retang2 = new Retangulo(0, 8, 4, 0); 

print $retang1->x1 . "," . $retang1->y1 . "<br>"; 
print $retang1->area() . "<br>"; 
 
print $retang2->perimetro() . "<br>"; 
 
$retang3 = $retang2; 
print $retang3->perimetro(); 
?>