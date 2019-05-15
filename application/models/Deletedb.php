<?php
class Deletedb extends CI_Model
{
    public function deleteConf($data){
        $this->load->library('session');
	    $email = $this->session->userdata('user');
        $cname = $data['ConfName'];
        $date = $data['Date'];
        $loc = $data['Loc'];
        $this->db->delete('Conference', array('ConfName'=>$cname,'Date'=>$date, 'Location'=>$loc,'Email'=>$email));
        if($this->db->affected_rows()){
            echo "<script>alert('Conference Deleted');</script>";
            echo("<meta http-equiv='refresh' content='1'>");
        }
        else{
            echo "<script>alert('Invalid Conference');</script>";   
        }
    }
     public function deleteEvent($data){
        $this->load->library('session');
	    $email = $this->session->userdata('user');
	    $data['Email'] = $email;
        $cname = $data['EventName'];
        $date = $data['Date'];
        $loc = $data['Loc'];
        if($this->db->delete('Event', array('EventName'=>$cname,'Date'=>$date, 'Location'=>$loc,'Email'=>$email))){
            echo "<script>alert('Event Deleted');</script>";
            echo("<meta http-equiv='refresh' content='1'>");
        }
        else{
            echo "<script>alert('Invalid Event');</script>";   
        }
    }
   
}
?>