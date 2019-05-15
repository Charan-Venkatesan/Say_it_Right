<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[newslettersubscription.SubscriberEmail]');
		if($this->form_validation->run() == true){
		    $this->load->model('Insertdb');
		    $email = array('SubscriberEmail' => $_POST['email']);
		    $this->Insertdb->insert($email);
		    $this->email->from('charan.ragav@gmail.com', 'Charan');
		    $this->email->to($_POST['email']);
		    $this->email->subject('You are In!');
		    $this->email->message("Thank you for subscribing to our Newsletter!!! \n Stay tuned for future updates!!!");
		    $this->email->send();
		}
		$this->load->view('index');
	}
	public function aboutPage()
	{
		$this->load->view('aboutPage');
	}
	public function buyFromUsPage()
	{
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('unit', 'unit','required|numeric');
	    $this->form_validation->run();
		$this->load->view('BuyFromUsPage');
	}
	public function contactPage()
	{
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('fname', 'Name', 'required|alpha|max_length[10]|min_length[4]');
	    $this->form_validation->set_rules('msg', 'Message', 'required|max_length[100]|min_length[10]');
	    $this->form_validation->set_rules('lname', 'LastName', 'required|max_length[10]|alpha|min_length[4]');
	    $this->form_validation->set_rules('tel', 'Telephone', 'required|regex_match[/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/]');
	    if($this->form_validation->run() == true){
	        $data = array(
	            'name'=>$_POST['fname'],
	            'lastname'=>$_POST['lname'],
	            'telephone'=>$_POST['tel'],
	            'message'=>$_POST['msg']
	            );
	       $this->load->model('Insertdb');
	       $this->Insertdb->insertContact($data);
	    }
		$this->load->view('ContactPage');
	}
	public function signUpPage()
	{
		$this->load->view('SignUpPage');
	}
	public function loginPage()
	{
	    $this->form_validation->set_rules('email', 'Email', 'required');
	    $this->form_validation->set_rules('pwd', 'Password', 'required');
	    if($this->form_validation->run() == true){
	        $data = array(
	      'emailid'=>$_POST['email'],
	       'password'=>$_POST['pwd']
	        );
	    $this->load->model('selectdb');
	    $this->selectdb->selectEmail($data);    
	    }
	    
		$this->load->view('LoginPage');
	}
	public function signUpInd()
	{
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('name', 'Name', 'required|alpha|max_length[10]|min_length[4]');
	    $this->form_validation->set_rules('lname', 'LastName', 'required|alpha|max_length[10]|min_length[4]');
	    $this->form_validation->set_rules('place', 'Placework', 'required|alpha|max_length[10]|min_length[4]');
	    $this->form_validation->set_rules('school','School', 'required|max_length[40]|min_length[3]');
	    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[signupind.Email]|is_unique[signupevent.Email]|is_unique[signupbusiness.Email]');
	    $this->form_validation->set_rules('pwd', 'Password', 'required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/]');
	    if($this->form_validation->run() == true){
	        $data = array(
	            'name'=>$_POST['name'],
	            'lastname'=>$_POST['lname'],
	            'placework'=>$_POST['place'],
	            'school'=>$_POST['school'],
	            'email'=>$_POST['email'],
	            'password'=>$_POST['pwd']
	            );
	       $this->load->model('Insertdb');
	       $this->Insertdb->insertSignupInd($data);
	    }
	    $this->load->view('SignUpInd');
	}
		public function signUpEvent()
	{
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('name', 'Name', 'required|alpha|max_length[10]|min_length[4]');
	    $this->form_validation->set_rules('lname', 'LastName', 'required|alpha|max_length[10]|min_length[4]');
	    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[signupind.Email]|is_unique[signupevent.Email]|is_unique[signupbusiness.Email]');
	    $this->form_validation->set_rules('pwd', 'Password', 'required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/]');
	    if($this->form_validation->run() == true){
	        $data = array(
	            'firstname'=>$_POST['name'],
	            'lastname'=>$_POST['lname'],
	            'email'=>$_POST['email'],
	            'password'=>$_POST['pwd']
	            );
	       $this->load->model('Insertdb');
	       $this->Insertdb->insertSignupEvent($data);
	    }
		$this->load->view('SignUpEvent');
	}
		public function signUpBiz()
	{
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('biz','Typeofbusiness', 'required');
	    $this->form_validation->set_rules('lname', 'LastName', 'required|alpha|max_length[10]|min_length[4]');
	    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[signupbusiness.Email]|is_unique[signupind.Email]|is_unique[signupevent.Email]');
	    $this->form_validation->set_rules('pwd', 'Password', 'required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%\^&\*])(?=.{8,})/]');
	    if($this->form_validation->run()){
	        $data = array(
	            'lastname'=>$_POST['lname'],
	            'email'=>$_POST['email'],
	            'password'=>$_POST['pwd'],
	            'typeofbiz'=>$_POST['biz']
	            );
	        $this->load->model('Insertdb');
	        $this->Insertdb->insertSignupBiz($data);
	    }
		$this->load->view('SignUpBiz');
	}
		public function buyFromUsCart()
	{
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	    $this->form_validation->set_rules('fname', 'Firstname', 'required|alpha|max_length[10]|min_length[4]');
	    $this->form_validation->set_rules('lname', 'LastName', 'required|alpha|max_length[10]|min_length[4]');
	    $this->form_validation->set_rules('add', 'Address', 'required|max_length[50]');
	    $this->form_validation->set_rules('apt', 'Apt', 'required|max_length[10]');
	    $this->form_validation->set_rules('city', 'City', 'required|max_length[40]|alpha|min_length[5]');
	    $this->form_validation->set_rules('zip', 'Zip', 'required|max_length[5]|numeric|min_length[5]');
	    if($this->form_validation->run() == true){
	        echo("<meta http-equiv='refresh' content='1'>");
	    }
		$this->load->view('BuyFromUsCart');
	}
		public function loginIndPage()
	{
	    $this->load->model('selectdb');
	    $dashData = $this->selectdb->selectDashboard();
	    $dashDataEvent1 = $this->selectdb->getEvent1();
	    $dashDataEvent2= $this->selectdb->getEvent2();
	    $dashDataEvent3 = $this->selectdb->getEvent3();
	    $dashDataConf1 = $this->selectdb->getConf1();
	    $dashDataConf2 = $this->selectdb->getConf2();
	    $dashDataConf3 = $this->selectdb->getConf3();
	    $dashDataEventAtt = $this->selectdb->getEventAtt();
	    $dashDataConfAtt = $this->selectdb->getConfAtt();
		$this->load->view('LoginIndPage', array('dashData'=>$dashData,'dashDataEvent1'=>$dashDataEvent1,'dashDataEvent2'=>$dashDataEvent2,'dashDataEvent3'=>$dashDataEvent3,'dashDataConf1'=>$dashDataConf1,'dashDataConf2'=>$dashDataConf2,'dashDataConf3'=>$dashDataConf3,'dashDataEventAtt'=>$dashDataEventAtt,'dashDataConfAtt'=>$dashDataConfAtt));
	}
	public function loginEventPage(){
	    $this->form_validation->set_rules('title', 'Event Title', 'required|max_length[50]|min_length[5]');
	    $this->form_validation->set_rules('desc', 'Event Description', 'required|max_length[500]|min_length[20]');
	    $this->form_validation->set_rules('date', 'Event Date', array('required','regex_match[/^\d{4}\-(0?[1-9]|1[012])\-(0?[1-9]|[12][0-9]|3[01])$/]'));
	    $this->form_validation->set_rules('loc', 'Location', 'required|max_length[20]|min_length[3]|alpha');
	    if($this->form_validation->run() == true){
	        if(isset($_POST['add'])){
	            $this->load->model('Insertdb');
	        $data = array(
	            'EventName'=>$_POST['title'],
	            'Description'=>$_POST['desc'],
	            'Date'=>$_POST['date'],
	            'Location'=>$_POST['loc']
	            );
	        $this->Insertdb->insertEvent($data);
	        }
	        else if(isset($_POST['delete'])){
	           $this->load->model('Deletedb');
	           $data = array(
	               'EventName'=>$_POST['title'],
	               'Date'=>$_POST['date'],
	               'Loc'=>$_POST['loc'],
	               );
	           $this->Deletedb->deleteEvent($data);
	        }
	        else if(isset($_POST['update'])){
	           $this->load->model('Updatedb');
	           $data = array(
	            'EventName'=>$_POST['title'],
	            'Description'=>$_POST['desc'],
	            'Date'=>$_POST['date'],
	            'Location'=>$_POST['loc']
	               );
	           $this->Updatedb->updateEvent($data);
	        }
	    }
	    $this->load->view('LoginEventPage');
	}
	public function eventManagePage(){
	    $this->load->model('selectdb');
	    $this->data['events'] = $this->selectdb->selectEvent();
	    $this->load->view('EventManagePage',$this->data);
	}
	public function conferenceEventPage(){
	    $this->load->model('selectdb');
	    $this->data['conferences'] = $this->selectdb->selectConf();
	    $this->load->view('ConferenceEventPage',$this->data);
	}
	public function myConferenceEventPage(){
	    $this->load->model('selectdb');
	    $this->data['myconference'] = $this->selectdb->selectMyConf();
	    $this->load->view('MyConferenceEventPage',$this->data);
	}
	public function myEventManagePage(){
	    $this->load->model('selectdb');
	    $this->data['myevents'] = $this->selectdb->selectMyEventsManage();
	    $this->load->view('MyEventManagePage',$this->data);
	}
	public function loginBizPage(){
	    $this->form_validation->set_rules('title', 'Conference Title', 'required|max_length[50]|min_length[5]');
	    $this->form_validation->set_rules('desc', 'Conference Description', 'required|max_length[500]|min_length[20]');
	    $this->form_validation->set_rules('date', 'Conference Date', array('required','regex_match[/^\d{4}\-(0?[1-9]|1[012])\-(0?[1-9]|[12][0-9]|3[01])$/]'));
	    $this->form_validation->set_rules('loc', 'Conference Location', 'required|max_length[20]|min_length[3]|alpha');
	    if($this->form_validation->run() == true){
	        if(isset($_POST['add'])){
	            $this->load->model('Insertdb');
	            $data = array(
	            'ConfName'=>$_POST['title'],
	            'ConfDesc'=>$_POST['desc'],
	            'Date'=>$_POST['date'],
	            'Location'=>$_POST['loc']
	            );
	        $this->Insertdb->insertConf($data);
	        }
	       else if(isset($_POST['delete'])){
	           $this->load->model('Deletedb');
	           $data = array(
	               'ConfName'=>$_POST['title'],
	               'Date'=>$_POST['date'],
	               'Loc'=>$_POST['loc'],
	               );
	           $this->Deletedb->deleteConf($data);
	       }
	       else if(isset($_POST['update'])){
	           $this->load->model('Updatedb');
	           $data = array(
	            'ConfName'=>$_POST['title'],
	            'ConfDesc'=>$_POST['desc'],
	            'Date'=>$_POST['date'],
	            'Location'=>$_POST['loc']
	               );
	           $this->Updatedb->updateConf($data);
	       }
	    }
	    $this->load->view('LoginBizPage');
	}
	public function eventBizPage(){
	    $this->load->model('selectdb');
	    $this->data['events'] = $this->selectdb->selectEvent();
	    $this->load->view('EventBizPage',$this->data);
	}
	public function conferenceManagePage(){
	    $this->load->model('selectdb');
	    $this->data['conferences'] = $this->selectdb->selectConf();
	    $this->load->view('ConferenceManagePage',$this->data);
	}
	public function myConferenceManagePage(){
	    $this->load->model('selectdb');
	    $this->data['myconference'] = $this->selectdb->selectMyConfManage();
	    $this->load->view('MyConferenceManagePage',$this->data);
	}
	public function myEventBizPage(){
	    $this->load->model('selectdb');
	    $this->data['myevents'] = $this->selectdb->selectMyEvents();
	    $this->load->view('MyEventBizPage',$this->data);
	}
	public function settingsBizPage(){
	     $config['upload_path'] = './resources/Uploads';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = true; 
        $this->load->library('upload',$config);
	    $config['upload_path'] = './resources/Uploads';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = true; 
        $this->load->library('upload',$config);
	    $this->load->model('selectdb');
	    $this->data['user'] = $this->selectdb->selectBiz();
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('biz','Typeofbusiness', 'required');
	    $this->form_validation->set_rules('lname', 'LastName', 'required|alpha|min_length[4]|max_length[10]');
	    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	    $this->form_validation->set_rules('pwd', 'Password', 'required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%\^&\*])(?=.{8,})/]');
	    if($this->form_validation->run() == true){
	        $data = array(
	            'TypeOfBiz'=>$_POST['biz'],
	            'lastname'=>$_POST['lname'],
	            'email'=>$_POST['email'],
	            'password'=>$_POST['pwd']
	            );
	       if($this->upload->do_upload('upload')){
	            $fileup = $this->upload->data();
	            $filename = $fileup['file_name'];
	            $data['ProfilePic'] = $filename; 
	        }
	       $this->load->model('updatedb');
	       $this->updatedb->updateLoginBizData($data);
	    }
	    $this->load->view('SettingsBizPage',$this->data);
	}
	public function conferencePage(){
	    $this->load->model('selectdb');
	    $this->data['conferences'] = $this->selectdb->selectConf();
	    $this->load->view('ConferencePage',$this->data);
	}
	public function eventPage(){
	    $this->load->model('selectdb');
	    $this->data['events'] = $this->selectdb->selectEvent();
	    $this->load->view('EventPage',$this->data);
	}
	public function myConferencePage(){
	    $this->load->model('selectdb');
	    $this->data['myconference'] = $this->selectdb->selectMyConf();
	    $this->load->view('MyConferencePage',$this->data);
	}
	public function myEventPage(){
	    $this->load->model('selectdb');
	    $this->data['myevents'] = $this->selectdb->selectMyEvents();
	    $this->load->view('MyEventPage',$this->data);
	}
	public function settingsEventPage(){
	    $config['upload_path'] = './resources/Uploads';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = true; 
        $this->load->library('upload',$config);
	    $this->load->model('selectdb');
	    $this->data['user'] = $this->selectdb->selectEventSettings();
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('name', 'Name', 'required|alpha|min_length[4]|max_length[10]');
	    $this->form_validation->set_rules('lname', 'LastName', 'required|alpha|min_length[4]|max_length[10]');
	    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	    $this->form_validation->set_rules('pwd', 'Password', 'required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%\^&\*])(?=.{8,})/]');
	    if($this->form_validation->run() == true){
	        $data = array(
	            'Firstname'=>$_POST['name'],
	            'Lastname'=>$_POST['lname'],
	            'email'=>$_POST['email'],
	            'password'=>$_POST['pwd']
	            );
	       if($this->upload->do_upload('upload')){
	            $fileup = $this->upload->data();
	            $filename = $fileup['file_name'];
	            $data['ProfilePic'] = $filename; 
	        }
	       $this->load->model('updatedb');
	       $this->updatedb->updateLoginEventData($data);
	    }
	    $this->load->view('SettingsEventPage',$this->data);
	}
	public function settingsPage(){
	    $config['upload_path'] = './resources/Uploads';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = true; 
        $this->load->library('upload',$config);
        $config['max_width']  = '225';
        $config['max_height']  = '225';
	    $this->load->model('selectdb');
	    $this->data['user'] = $this->selectdb->select();
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('name', 'Name', 'required|alpha|min_length[4]|max_length[10]');
	    $this->form_validation->set_rules('lname', 'LastName', 'required|alpha|min_length[4]|max_length[10]');
	    $this->form_validation->set_rules('place','Placework','required|alpha|min_length[4]|max_length[10]');
	    $this->form_validation->set_rules('school', 'School', 'required|max_length[40]|min_length[3]');
	    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	    $this->form_validation->set_rules('pwd', 'Password', 'required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%\^&\*])(?=.{8,})/]');
	    if($this->form_validation->run() == true){
	        $data = array(
	            'name'=>$_POST['name'],
	            'lastname'=>$_POST['lname'],
	            'placework'=>$_POST['place'],
	            'school'=>$_POST['school'],
	            'email'=>$_POST['email'],
	            'password'=>$_POST['pwd'],
	            );
	        if($this->upload->do_upload('upload')){
	            $fileup = $this->upload->data();
	            $filename = $fileup['file_name'];
	            $data['ProfilePic'] = $filename; 
	        }
	       $this->load->model('updatedb');
	       $this->updatedb->updateLoginData($data);
	    }
	    $this->load->view('SettingsPage',$this->data);
	}
}
