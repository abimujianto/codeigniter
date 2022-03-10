 <?php
class News_model extends CI_Model{
    public function __construct(){ //setiap object yang dibuat di class ini maka construct ini akan dipanggil
     $this->load->database();// load database
    }

    public function get_news(){
        $query = $this->db->get('news'); //= SELECT * FROM news
        return $query->result_array();
    }
}
?>
 



