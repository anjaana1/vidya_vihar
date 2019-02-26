<?php
class Datawork extends CI_model{
    public function insert_data($table,$fields){
        $this->db->insert($table,$fields);
    }
    public function calling_data($table,$cond=NULL){
        if($cond == NULL){
            $data = $this->db->get($table);
            return $data->result();
        }
        else{
            $data = $this->db->where($cond)->get($table);
            return $data->result();
        }
    }
    public function check_data($table,$cond){
        $data = $this->db->where($cond)->get($table);
        if($data->num_rows()<1){
            return FALSE;
        }
        else{
            return TRUE;
        }
    }
    public function join_data($table1,$table2,$cond,$where=NULL){
        
        if($where==NULL):
            $this->db->select('*');
            $this->db->from($table1);
            $this->db->join($table2,$cond);
            $data = $this->db->get();
            return $data->result();
        else:
            $this->db->select('*');
            $this->db->from($table1);
            $this->db->where($where);
            $this->db->join($table2,$cond);
            $data = $this->db->get();
            return $data->result();
        endif;
    }
}
?>