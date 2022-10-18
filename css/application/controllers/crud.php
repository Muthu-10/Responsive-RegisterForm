<?php
class Crud extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
}
public function savedata()
{
    $this->load->view('insert');
    
    if($this->input-post('save'))
    {
        $data['name']=$this->input->post('name');
        $data['age']=$this->input->post('age');
        $data['number']=$this->input->post('number');
        $data['area of interest']=$this->input->post('area of interest');
        $data['country']=$this->input->post('country');
        $data['state']=$this->input->post('state');
        $data['skill']=$this->input->post('skill');
        $response=$this->Crud_model->saverecords($data);
        if($response===true)
        {
            echo "Record saved Successfully.";
        }
        else
        {
            echo "Not Inserted ";
        }
    }
}
?>