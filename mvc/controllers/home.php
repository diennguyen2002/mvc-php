<?php
    class home extends controller {
        function sayhello($so1, $so2){
            $sv = $this->model("sinhvienModel");
            echo $sv->tong($so1, $so2);

        }

        function show(){
            $sv = $this->model("sinhvienModel");
            echo $sv->getSV();
        }
    }

?>