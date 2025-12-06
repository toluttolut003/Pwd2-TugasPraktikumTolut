<?php

class ikan extends Dbh {

    protected function getAllData(){
        $sql = "SELECT * FROM ikan";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows > 0) {
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }

}