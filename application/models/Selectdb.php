<?php
class selectdb extends CI_Model{
    public function select(){
        $this->load->library('session');
        $email = $this->session->userdata('user');
        $this->db->select("name,lastname,placework,school,email,password,ProfilePic");
        $this->db->from('signupind');
        $this->db->where('Email',$email);
        $query = $this->db->get();
        return $query->result();
    }
    public function selectBiz(){
        $this->load->library('session');
        $email = $this->session->userdata('user');
        $this->db->select("TypeOfBiz,lastname,email,password,ProfilePic");
        $this->db->from('signupbusiness');
        $this->db->where('Email',$email);
        $query = $this->db->get();
        return $query->result();
    }
    public function selectEventSettings(){
        $this->load->library('session');
        $email = $this->session->userdata('user');
        $this->db->select("Firstname,Lastname,Email,Password,ProfilePic");
        $this->db->from('signupevent');
        $this->db->where('Email', $email);
        $query = $this->db->get();
        return $query->result();
    }
    public function selectEmail($credData){
        $this->load->library('session');
        $email = $credData['emailid'];
        $pwd = $credData['password'];
        $this->db->select('*')->from('signupind')->where('Email', $email)->where('Password', $pwd); 
        $q1 = $this->db->get(); 
        $queryIndCount = $q1->num_rows();
        $this->db->select('*')->from('signupevent')->where('Email', $email)->where('Password', $pwd);
        $q2 = $this->db->get();
        $queryEveCount = $q2->num_rows();
        $this->db->select('*')->from('signupbusiness')->where('Email', $email)->where('Password', $pwd);
        $q3 = $this->db->get();
        $queryBizCount = $q3->num_rows();
        if($queryEveCount == 1){
            $this->session->set_userdata('user',$email);
            redirect('http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/loginEventPage');
        }
        else if($queryIndCount == 1){
            $this->session->set_userdata('user',$email);
            redirect('http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/loginIndPage');
            
        }
        else if($queryBizCount == 1){
            $this->session->set_userdata('user',$email);
            redirect('http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/loginBizPage');
            
        }
        else{
            echo "<script>alert('Invalid Credentials')</script>";
        }
    }
    public function selectDashboard(){
        $myEventCountQuery = $this->db->query('Select * from EventAttend');
        $myEventCount = $myEventCountQuery->num_rows();
        $myConfCountQuery = $this->db->query('select * from ConfAttend');
        $myConfCount = $myConfCountQuery->num_rows();
        $eventCountQuery = $this->db->query('select * from Event');
        $eventCount = $eventCountQuery->num_rows();
        $confCountQuery = $this->db->query('select * from Conference');
        $confCount = $confCountQuery->num_rows();
        $dashData = array(
            'Total'=>$myEventCount + $myConfCount,
            'Events'=>$myEventCount,
            'Conf'=>$myConfCount,
            'Rem'=>$eventCount + $confCount
            );
        return $dashData;
        }
    public function getEvent1(){
        $this->db->select('*');
        $this->db->where('EventID','2');
        $res = $this->db->get('Event');
        return $res->result_array();
    }
    public function getEvent2(){
        $this->db->select('*');
        $this->db->where('EventID','3');
        $res = $this->db->get('Event');
        return $res->result_array();
    }
    public function getEvent3(){
        $this->db->select('*');
        $this->db->where('EventID','4');
        $res = $this->db->get('Event');
        return $res->result_array();
    }
    public function getConf1(){
        $this->db->select('*');
        $this->db->where('ConfID','2');
        $res = $this->db->get('Conference');
        return $res->result_array();
    }
     public function getConf2(){
        $this->db->select('*');
        $this->db->where('ConfID','3');
        $res = $this->db->get('Conference');
        return $res->result_array();
    }
     public function getConf3(){
        $this->db->select('*');
        $this->db->where('ConfID','7');
        $res = $this->db->get('Conference');
        return $res->result_array();
    }
    public function getEventAtt(){
        $this->load->library('session');
        $email = $this->session->userdata('user');
        $this->db->select('*');
        $this->db->where('Email',$email);
        $res = $this->db->get('EventAttend');
        return $res->result_array();
    }
     public function getConfAtt(){
        $this->load->library('session');
        $email = $this->session->userdata('user');
        $this->db->select('*');
        $this->db->where('Email',$email);
        $res = $this->db->get('ConfAttend');
        return $res->result_array();
    }
    public function selectConf(){
        $query = $this->db->get('Conference');
        return $query->result();
    }
    public function selectEvent(){
        $query = $this->db->get('Event');
        return $query->result();
    }
    public function selectMyConf(){
        $this->load->library('session');
        $email = $this->session->userdata('user');
        $this->db->where('Email',$email);
        $query = $this->db->get('ConfAttend');
        return $query->result();
    }
      public function selectMyConfManage(){
        $this->load->library('session');
        $email = $this->session->userdata('user');
        //$email = 'charan.ragav@gmail.com';
        $this->db->where('Email',$email);
        $query = $this->db->get('Conference');
        return $query->result();
    }
    public function selectMyEvents(){
        $this->load->library('session');
        $email = $this->session->userdata('user');
        $this->db->where('Email',$email);
        $query = $this->db->get('EventAttend');
        return $query->result();
    }
     public function selectMyEventsManage(){
        $this->load->library('session');
        $email = $this->session->userdata('user');
        $this->db->where('Email',$email);
        $query = $this->db->get('Event');
        return $query->result();
    }
}
?>