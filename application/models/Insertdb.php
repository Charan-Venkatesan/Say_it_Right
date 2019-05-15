<?php
class Insertdb extends CI_Model
{
    public function insert($email){
        if($this->db->insert('newslettersubscription', $email)){
            echo "<script>alert('Newsletter Subscribed');</script>";
        }
    }
    public function insertContact($data){
        if($this->db->insert('contactus', $data)){
            echo "<script>alert('Thanks for contacting us. You will receive details about your ticket shortly!')</script>";
            echo("<meta http-equiv='refresh' content='1'>");
        }
        
    }
    public function insertSignUpInd($data){
        if($this->db->insert('signupind', $data)){
            echo "<script>alert('Thanks for Signing up with Say it Right as Individual User!')</script>";
            echo("<meta http-equiv='refresh' content='1'>");
        }
        
    }
    public function insertSignupEvent($data){
        if($this->db->insert('signupevent', $data)){
            echo "<script>alert('Thanks for Signing up with Say it Right as Event User!');</script>";
            echo("<meta http-equiv='refresh' content ='1'>");
        }
        
    }
    public function insertSignupBiz($data){
        if($this->db->insert('signupbusiness', $data)){
            echo "<script>alert('Thanks for Signing up with Say it Right as Business User!')</script>";
            echo("<meta http-equiv='refresh' content ='1'>");
            
        }
    }
    public function insertEvent($data){
        $this->load->library('session');
	    $email = $this->session->userdata('user');
	    $data['Email'] = $email;
        if($this->db->insert('Event', $data)){
            echo "<script>alert('Event Added')</script>";
            echo("<meta http-equiv='refresh' content='1'>");
        }
    }
     public function insertConf($data){
         $this->load->library('session');
	    $email = $this->session->userdata('user');
	    $data['Email'] = $email;
        if($this->db->insert('Conference', $data)){
            echo "<script>alert('Conference Added')</script>";
            echo("<meta http-equiv='refresh' content='1'>");
        }
    }
}
?>