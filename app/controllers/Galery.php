<?php 

class Galery extends Controller
{
    public function index()
    {
        $data["page"] = 'Galery';
        $this->view('components/header', $data);
        $this->view('galery/index' , $data);
        $this->view('components/footer');
    }
}


?>