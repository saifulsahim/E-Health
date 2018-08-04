<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rating_model extends CI_Model{


    public function save_rating()
    {
        $data['doc_id'] = $this->input->post('doc_id');
        $data['value'] = $this->input->post('val');
        $data['patient_id'] = $this->session->userdata('insert_id');

        $rating = $this->db->select('*')
            ->from('tbl_rating')
            ->where('doc_id', $data['doc_id'])
            ->where('patient_id', $data['patient_id'])
            ->get()
            ->row();

        if($rating != null)
        {
            # update
            $this->db
                ->where('rating_id', $rating->rating_id)
                ->update('tbl_rating', $data);

        } else {
            $this->db->insert('tbl_rating', $data);
        }

    }

}