<?php
    class homeController extends controller {
        function sayhello($so1, $so2){
            $sv = $this->model("sinhvien");
            echo $sv->tong($so1, $so2);

        }

        function show(){
            $sv = $this->model("sinhvien");
            $ds = $sv->getSV();
            $this->view("layout1", [
                "page" => "new",
                "ds" => $ds
            ]);
        }
    }

?>