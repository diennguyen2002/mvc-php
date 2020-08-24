<?php
class sinhvienModel extends db{

    public function getSV(){
        $qr = "SELECT * FROM sinhvien";
        return mysqli_query($this->con, $qr);
    }

    public function tong($a, $b){
        return $a + $b;
    }
}

?>