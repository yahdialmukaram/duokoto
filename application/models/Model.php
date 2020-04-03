<?php
class Model extends CI_Model
{

    public function tampil_data()
    {
        $this->db
        ->from('tb_berita')
        ->order_by('id', 'desc');
        return $this->db->get()->result();
    }

    // public function model_simpan($data)
    // {
    //     $this->db->insert('tb_berita',$data);
    // }

    function model_hapus($id)
    {
        // ini model
    $this->db->where('id',$id);
    $this->db->delete('tb_berita');
    } 
     function simpan_berita($object)
     {
        // $hsl=$this->db->query("INSERT INTO tb_berita (judul,isi,image) VALUES ('$jdl','$berita','$gambar')");
        // return $hsl;
        $this->db->insert('tb_berita', $object);
        
    }
    public function model_edit($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('tb_berita')->result();
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
    public function berita_home()
    {
        $this->db->from('tb_berita');
        $this->db->order_by('id', 'desc');
        $this->db->limit(5);
        return $this->db->get()->result();
        
    }
    

}

