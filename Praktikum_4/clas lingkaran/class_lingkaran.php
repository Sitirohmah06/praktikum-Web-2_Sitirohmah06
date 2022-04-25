<<<<<<< HEAD
<?php
class Lingkaran { // buka class
    private $jari;
    const PHI = 3.14;
    function __construct($r){
        $this->jari = $r;
    }
    function getLuas(){
      
        return self::PHI * $this->jari * $this->jari;
    }
    function getKeliling(){
      
        return 2 * self::PHI * $this->jari;
    }
 }//tutp kelas
 ?>
=======
<?php
class Lingkaran { // buka class
    private $jari;
    const PHI = 3.14;
    function __construct($r){
        $this->jari = $r;
    }
    function getLuas(){
      
        return self::PHI * $this->jari * $this->jari;
    }
    function getKeliling(){
      
        return 2 * self::PHI * $this->jari;
    }
 }//tutp kelas
 ?>
>>>>>>> c35dd39c43182cb7f2789076c66df1fc10aae002
