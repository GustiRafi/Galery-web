<?php 

class About extends Controller
{
    public function index($nama= 'Rafi', $pekerjaan ='Pelajar', $umur = 15)
    {
        $data["page"] = 'About';
        $data["nama"] = $nama;
        $data["pekerjaan"] = $pekerjaan;
        $data["umur"] = $umur;
        $this->view('components/header', $data);
        $this->view('about/index' , $data);
        $this->view('components/footer');
    }

    public function page()
    {
        $data["page"] = 'Page';
        $this->view('components/header', $data);
        $this->view('about/page');
        $this->view('components/footer');
    }
}



?>