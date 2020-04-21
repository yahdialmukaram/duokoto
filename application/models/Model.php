<?php
class Model extends CI_Model
{
    // fungsi untuk simpan data
    public function create($table,$object)
    {
        $this->db->insert($table,$object);
    }
    // fungsi untuk menemukan data
    public function find($table,$field,$field_name)
    {
        $this->db->from($table);
        $this->db->where($field, $field_name);
        return $this->db->get();
    }
    // check username dan password user
    public function check_account($username,$password)
    {
        $this->db->from('tb_user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get();
    }
    public function tampil_data()
    {
        $this->db
        ->from('tb_berita')
        ->order_by('id', 'desc');
        return $this->db->get()->result();
    }
    public function tampil_saran()
    {
        $this->db->from('tb_saran');
        $this->db->order_by('id', 'desc');
        
       return $this->db->get()->result_array();
      
        
        
        
    }

    public function model_hapus($id)
    {
        // ini model
    $this->db->where('id',$id);
    $this->db->delete('tb_berita');
    } 

   public function simpan_berita($object)
     {
        $this->db->insert('tb_berita', $object);
        
    }
    public function simpan_saran($data)
    {
        $this->db->insert('tb_saran', $data);
        
    }
    public function hapus_saran($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_saran');
        
    }
    public function model_details($id)
    {
        //  $data = $this->db->get_where('tb_saran', array('id' =>$id))->row_array();
        // return $data;
        
        // $this->db->select('*');
        // $this->db->from('tb_saran');
        
        $this->db->where('id',$id);
        return $this->db->get_where('tb_saran')->row_array();
    }
    public function model_edit($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('tb_berita')->row_array();
    }
    public function model_edit_simpan($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('tb_berita',$data);


    }
    public function berita_user()
    {
        $this->db->from('tb_berita');
        $this->db->order_by('id', 'desc');
        $this->db->limit(5);
       return $this->db->get()->result();
        
    }
    public function berita_home($ketegori)
    {
        $this->db->from('tb_berita');
        $this->db->order_by('id', 'desc');
        $this->db->where('kategori', $ketegori);
        
        $this->db->limit(5);
        return $this->db->get()->result();
        
    }
    public function details_berita($id)
    {
        $this->db->where('id',$id);
        $this->db->order_by('id', 'desc');
        return $this->db->get('tb_berita')->result();
    }

    public function data($number,$offset)
    {
		return $query = $this->db->get('tb_berita',$number,$offset)->result();		
	}
 
    public function jumlah_data()
    {
		return $this->db->get('tb_berita')->num_rows();
    }
    public function total_row_berita(Type $var = null)
    {
        $this->db->from('tb_berita');
        $this->db->where('kategori', 'berita');
        return $this->db->count_all_results();
        
    }
    function get_berita_list($limit, $start){
        $query = $this->db->where('kategori', "berita")->order_by('id', 'desc')->get('tb_berita', $limit, $start);
        return $query;
    }
    
    
    function pengunjung()
    {
        return $this->db->query("SELECT * FROM tb_pengunjung WHERE tanggal='".date("Y-m-d")."' GROUP BY ip");
    }
    function totalpengunjung(){
        return $this->db->query("SELECT COUNT(hits) as total FROM tb_pengunjung");
    }
    function hits(){
        return $this->db->query("SELECT SUM(hits) as total FROM tb_pengunjung WHERE tanggal='".date("Y-m-d")."' GROUP BY tanggal");
    }
    function totalhits(){
        return $this->db->query("SELECT SUM(hits) as total FROM tb_pengunjung");
    }
    function pengunjungonline(){
        $bataswaktu       = time() - 300;
        return $this->db->query("SELECT * FROM statistik WHERE online > '$bataswaktu'");
    }

    

}
