<?php

class viewIkan extends ikan {

    public function showAllIkan(){
        $datas = $this->getAllData();
        foreach($datas as $data){
            echo '<tr><td>'.$data['id_ikan'].'</td>';
            echo '<td>'.$data['nama'].'</td>';
            echo '<td>'.$data['quantity'].'</td></tr>';
        }
    }
}