<?php
    class homeController extends controller {
        function sayhello($so1, $so2){
            $sv = $this->model("sinhvien");
            echo $sv->tong($so1, $so2);

        }

        function show(){
            $sv = $this->model("sinhvien");
            $ten = $sv->getSV();
            $this->view("layout2", [
                "page" => "new",
                "ten" => $ten
            ]);
        }
    }

?>