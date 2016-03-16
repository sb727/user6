<?php

class Pages extends CI_Controller {

    public $isLoggedIn;

    public function __construct(){
        parent::__construct();
        $this->isLoggedIn = false;
        $this->load->model('mymodel');
    }

    public function isLoggedIn($username, $password){
        echo $username;
        echo $password;
        if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){

            return $this->mymodel->isUserLoggedIn($username,$password);
        }
        if(!isset($_SESSION['username']))
            $_SESSION['username'] = $_POST['username'];

        if(!isset($_SESSION['password']))
            $_SESSION['password'] = $_POST['password'];
        return true;
    }

    public function redirect(){
        $this->load->view('pages/login');
    }

    private function search_hotel($hotel,$hotel_name){
        $hotel = $this->mymodel->getSpecificHotelList($hotel_name);
        return $hotel;
    }

    public function ajaxInvoke() {
        $search_result = $this->search_hotel('', isset($_POST['dest']) ? $_POST['dest'] : '');
        $this->load->view("pages/ajax");
    }

    public function detail_show($num){
        $hotels = $this->mymodel->getHotel($num);
        $data['hotel'] = $hotels;
        $this->load->view("pages/detail",$data);
    }

    /**
     * @param string $page
     */
    public function view($page = 'home')
    {
        if(!$this->isLoggedIn(isset($_POST['username']) ? $_POST['username'] : "",isset($_POST['password']) ? $_POST['password'] : "")){
            $this->redirect();
            return;
        }else{

        }

        if(isset($_GET['num'])){
            $this->detail_show($_GET['num']);
            return;
        }

        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        if (!isset($_POST['hotel_name'])){
            $hotel = $this->mymodel->getHotelList();
            $search_result = $this->search_hotel($hotel,"");
        }else{
            $hotel = $this->mymodel->getHotelList();
            $search_result = $this->search_hotel($hotel,$_POST['hotel_name']);

        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['search_result'] = $search_result;

        $this->load->view('templates/header', $data);
        $this->load->view('pages/body', $data);
        $this->load->view('templates/footer', $data);
    }


}