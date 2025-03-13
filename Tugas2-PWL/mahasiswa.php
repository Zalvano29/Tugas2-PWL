<?php
class Mahasiswa {
    public $nim, $nama;

    function setData($nim, $nama) {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    function getData() {
        $mahasiswa = [
            'nim' => $this->nim,
            'nama' => $this->nama
        ];
        return $mahasiswa;
    }

    function printData($data = NULL) {
        if(!is_null($data)) {
            echo "Data Mahasiswa : <br> <br>";

            foreach($data as $key => $value) {
                echo $value, "<br>";
            } 
        } else {
            echo "Data kosong";
        }
    }
}
?>