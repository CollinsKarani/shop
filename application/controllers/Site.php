<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
             public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Site_model'));
        $this->load->library('cart');
    }

     // cart
     public function addto_cart($product_id){
        $data=$this->Site_model->product_details($product_id);
        $details=array(
        'id'=>$product_id,
        'qty'=>1,
        'name'=>$data['product_name'],
        'price'=>$data['price'],
        'image'=>$data['product_image']
        );
      $cartdetail=  $this->cart->insert($details);
        redirect('Site/cart');
       // echo json_encode($data);
       echo $this->cart->total_items();
       //echo $product_id;
     }
       //end of cart

       //Update Cart item
       function updateItemQty(){
           $update=0;

           //Get item in the cart
           $rowid=$this->input->get('rowid');
           $qty=$this->input->get('qty');

           //update cart item
           if(!empty($rowid)&&!empty($qty)){
               $data=array(
               'rowid'=>$rowid,
               'qty'=>$qty
               );
               $update=$this->cart->update($data);
               //return response
               echo $update?'ok':'err';
           }
       }

        // CART CHECKOUT AFTER PAYMENT
    public  function payment_checkout(){
        if($this->session->userdata('is_loggedin')){

        }
        else{
            redirect('site/login_checkout');
        }
    }

        //adding to cart items
     function add()
    {
        // Set array for send data.
        $insert_data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'image'=>$this->input->post('image'),
            'qty' => 1
        );
        // This function add items into cart.
        //$compID=$this->session->userdata('company_id');
        $this->cart->insert($insert_data);
        // This will show insert data in cart.
        redirect('site/cart');
    }


      function remove($rowid)
    {
        // Check rowid value.
        if ($rowid === "all") {
            // Destroy data which store in  session.
            $this->cart->destroy();
        } else {
            // Destroy selected rowid in session.
            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );
            // Update cart data, after cancel.
            $this->cart->update($data);
        }
        // This will show cancel data in cart.
      redirect('site/cart');
    }

         public function cart(){
             //get cart content into the array add_cart
        $data['add_cart']=$this->cart->contents();
        $this->load->view('required/header',$data);
        $this->load->view('site/cart',$data);
        $this->load->view('required/footer');
     }

       public function checkout(){
             //get cart content into the array add_cart
        $data['add_cart']=$this->cart->contents();
        $this->load->view('required/header',$data);
        $this->load->view('site/checkout',$data);
        $this->load->view('required/footer');
     }

         public function place_order(){
             //get cart content into the array add_cart
             if($this->session->userdata('is_loggedin')){
                 $data['add_cart']=$this->cart->contents();
        $this->load->view('required/header',$data);
        $this->load->view('site/place_order',$data);
        $this->load->view('required/footer');
             }
             else{
                 redirect('site/login_checkout');
             }

     }


       public function payment(){
             //get cart content into the array add_cart
             if($this->session->userdata('is_loggedin')){
                 $data['add_cart']=$this->cart->contents();
        $this->load->view('required/header',$data);
        $this->load->view('site/payment',$data);
        $this->load->view('required/footer');
             }
             else{
                 redirect('site/login_checkout');
             }

     }


     /* THE INDEX PAGE */
	public function index()
	{
	    $data['product_list']=$this->Site_model->get_products();
        $data['add_cart']=$this->cart->contents();
		$this->load->view('required/header',$data);
        $this->load->view('site/index');
        $this->load->view('required/footer');
	}


     public function register(){
         $this->load->view('required/header');
        $this->load->view('register');
        $this->load->view('required/footer');
     }

         public function register_checkout(){
             $data['add_cart']=$this->cart->contents();
         $this->load->view('required/header',$data);
        $this->load->view('site/register_checkout');
        $this->load->view('required/footer');
     }

       public function login(){

         $this->load->view('required/header');
        $this->load->view('login');
        $this->load->view('required/footer');
     }

        public function login_checkout(){
            $data['add_cart']=$this->cart->contents();
         $this->load->view('required/header',$data);
        $this->load->view('site/login_checkout');
        $this->load->view('required/footer');
     }


    public function register_user()
    {
        if(isset($_POST['submit']))
        {
        $params=array(
        'fname'=>$this->input->post('fname'),
        'surname'=>$this->input->post('lname'),
        'phone'=>$this->input->post('phone'),
        'email'=>$this->input->post('email'),
        'password'=>$this->input->post('password')

        );
        }
        $result=$this->Site_model->register_user($params);
         if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Thank you for dear customer for Registering with us! .<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Site/register');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Site/register');

            }
    }


      //Register to checkout
    public function registerToCheckout()
    {
        if(isset($_POST['submit']))
        {
        $params=array(
        'fname'=>$this->input->post('fname'),
        'surname'=>$this->input->post('lname'),
        'phone'=>$this->input->post('phone'),
        'email'=>$this->input->post('email'),
        'password'=>$this->input->post('password')

        );
        }
        $result=$this->Site_model->register_user($params);
         if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Thank you for dear customer for Registering with us! .<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Site/register');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Site/register');

            }
    }
   public function Dashboard(){
       $data['product_list']=$this->Site_model->get_products();
      $this->load->view('required/header_admin');
      $this->load->view('account/account',$data);
      $this->load->view('required/footer');
   }

     /* PAGE NOT FOUND */
      public function Error()
	{

        $this->load->view('404');

	}

     /* ADMIN LOGIN FUNCTION */
    public function Signin()
    {
        if(isset($_POST['login']))
        {
            $params=array(
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password')
            );
        }
        $result=$this->Site_model->Signin($params);
        if($result)
        {
                 $session_data1 = array(
                        'email' => $this->input->post('email'),
                        'is_logged_in' => 1
                    );
                    echo "success";
                    $this->session->set_userdata($session_data1);
                    redirect('Site/Dashboard');


        }
        else
        {
         $this->session->set_flashdata('error', '<div class="alert alert-danger">Username or Password is incorrect!.<button class="close" data-dismiss="alert" >&times;</button></div>');
         redirect('Site/login');
        }

    }

      /* SIGNIN TO CHECKOUT */
    public function Signin_checkout()
    {
        if(isset($_POST['login']))
        {
            $params=array(
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password')
            );
        }
        $result=$this->Site_model->Signin_checkout($params);
        if($result)
        {
                 $session_data1 = array(
                        'email' => $this->input->post('email'),
                        'is_loggedin' => 1
                    );
                    echo "success";
                    $this->session->set_userdata($session_data1);
                    redirect('Site/checkout');


        }
        else
        {
         $this->session->set_flashdata('error', '<div class="alert alert-danger">Username or Password is incorrect!.<button class="close" data-dismiss="alert" >&times;</button></div>');
         redirect('Site/login_checkout');
        }

    }

        // =============LOGOUT FROM THE SYSTEM BY ADMIN========================
     function logout()
    {
        $this->session->unset_userdata('is_logged_in');
        $this->session->unset_userdata('email');
        $this->session->sess_destroy();
        redirect('Site/login');
    }


    public function add_product(){
        if(isset($_POST['save']))
        {
        $file_name='product_image';
        $product=$this->upload_photo($file_name);
            $params=array(
            'product_name'=>$this->input->post('product_name'),
            'price'=>$this->input->post('price'),
            'quantity_available'=>$this->input->post('quantity_available'),
            'description'=>$this->input->post('description'),
            'product_image'=>$product
            );
            $result=$this->Site_model->add_product($params);
             if($result)
            {
                $this->session->set_flashdata('success', ' <div class="alert alert-success">Product Added Successfully.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Site/Dashboard');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
                redirect('Site/Dashboard');

            }
        }
    }



          /* UPLOAD Item Photos */
      public function upload_photo($product)
    {
        $field_name = $product;
        $config['upload_path'] = 'assets/products/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '3000';
        $config['max_height'] = '2900';
        $config['encrypt_name'] = true;

       // $this->load->library('upload',$config);
         $this->upload->initialize($config);
        if (!$this->upload->do_upload($field_name))
        {
          $this->session->set_flashdata('error', '<div class="alert alert-danger">Error occurred while processing the request.<button class="close" data-dismiss="alert" >&times;</button></div>');
        }
         else {
            $file_data = $this->upload->data();
            $filename = $file_data['file_name'];
            return $filename;
        }

    }






  }