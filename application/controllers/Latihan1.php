<?php 

Class Latihan1 extends CI_Controller
{
    public function index()
    {
        // echo "Selamat Datang.. Selamat Belajar Web Programing";
        // $this ->load->view('latihan');

        $a = 10;
        $b = 20;
        $data['c']=$a+$b;

        $this ->load->view('latihan', $data);
    }

    public function penjumlahan($n1, $n2)
    {
        // $this->load->model('Model_latihan1');
        // $hasil = $this->Model_latihan1->jumlah($n1,$n2);
        // echo "Hasil Penjumlahan dari". $n1 ."+". $n2. "=" .$hasil;

        // $this->load->model('Model_latihan1');

        // $data['nilai1'] = $n1;
        // $data['nilai2'] = $n2;
        // $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

        // $this->load->view('view-latihan1', $data);
    }
}
?>