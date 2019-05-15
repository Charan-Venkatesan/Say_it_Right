<?php
    class Updatedb extends CI_model{
        public function updateLoginData($data){
            $this->load->library('session');
            $email = $this->session->userdata('user');
            $this->db->where('email',$email);
            if($this->db->update('signupind', $data)){
                echo "<script>alert('Userprofile Updated');</script>";
                echo("<meta http-equiv='refresh' content='1'>");
            }
            else{
                echo "<script>alert('Unable to update user profile')</script>";
            }
            
        }
         public function updateLoginBizData($data){
             $this->load->library('session');
            $email = $this->session->userdata('user');
            $this->db->where('email',$email);
            if($this->db->update('signupbusiness', $data)){
                echo "<script>alert('Business profile Updated');</script>";
                echo("<meta http-equiv='refresh' content='1'>");
            }
              else{
                echo "<script>alert('Unable to update Business profile')</script>";
            }
        }
        public function updateLoginEventData($data){
            $this->load->library('session');
            $email = $this->session->userdata('user');
            $this->db->where('email',$email);
            if($this->db->update('signupevent', $data)){
                echo "<script>alert('Event profile Updated');</script>";
                echo("<meta http-equiv='refresh' content='1'>");
            }
              else{
                echo "<script>alert('Unable to update Event profile')</script>";
            }
        }
        public function updateEvent($data){
            $this->load->library('session');
	        $email = $this->session->userdata('user');
	        $data['Email'] = $email;
            $EventName = $data['EventName'];
            $this->db->where('Email', $email);
            $this->db->where('EventName',$EventName);
            $this->db->update('Event', $data);
            if($this->db->affected_rows()){
                echo "<script>alert('Event Updated');</script>";
                echo("<meta http-equiv='refresh' content='1'>");
            }
            else{
                echo "<script>alert('Unable to Update Event')</script>";
            }
        }
        public function updateConf($data){
            $this->load->library('session');
	        $email = $this->session->userdata('user');
	        $data['Email'] = $email;
	        $ConfName = $data['ConfName'];
            $this->db->where('Email', $email);
            $this->db->where('ConfName',$ConfName);
            $this->db->update('Conference', $data);
            if($this->db->affected_rows()){
                echo "<script>alert('Conference Updated');</script>";
                echo("<meta http-equiv='refresh' content='1'>");
            }
            else{
                echo "<script>alert('Unable to Update Conference')</script>";
            }
        }
    }