<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site_model extends CI_Model
{



      //register user
    public function register_user($params)
    {
        $qry=$this->db->insert('user',$params);
         if ($qry) {
            return true;
        } else {
            return false;
        }
    }

      public function Signin($params)
  {
    $data=array(
    'email'=>$params['email'],
    'password'=>$params['password']
    );
     $query = $this->db->get_where('user', $data);
        if ($query->num_rows() == 1) {
            return $query->row('email');
        }
        else {
            return false;
        }
  }

       public function Signin_checkout($params)
  {
    $data=array(
    'email'=>$params['email'],
    'password'=>$params['password']
    );
     $query = $this->db->get_where('user', $data);
        if ($query->num_rows() == 1) {
            return $query->row('email');
        }
        else {
            return false;
        }
  }



          /*  ADD product  */
    public function add_product($params)
    {
            $qry = $this->db->insert('stock', $params);
            if ($qry) {
                    return true;
            } else {
                    return false;
            }
    }


    public function get_products(){
        $this->db->select('*');
        $this->db->from('stock');
         $query=$this->db->get();
        return $query->result_array();

    }

    public function product_details($product_id){
        $this->db->select('*');
        $this->db->from('stock');
         $this->db->where('product_id',$product_id);
         $query=$this->db->get();
        return $query->row_array();

    }


}

?>