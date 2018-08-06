<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model
{


    public function ajax_email_address_check($email_address)
    {
        $this->db->select('*');
        $this->db->from('tbl_doctor');
        $this->db->where('doc_email', $email_address);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }


    public function all_active_doctors($doc_category)
    {

//        $result = $this->db->select('*')
//            ->from('tbl_doctor')
//            ->where(array('doc_status' => 1, 'doc_category' => $doc_category))
//            ->get()
//            ->result();

        $result = $this->db->query("SELECT
    IFNULL(AVG(tbl_rating.value), 0) AS rating,
    COUNT(tbl_rating.rating_id) AS rating_count,
    tbl_doctor.*
FROM
    tbl_doctor
LEFT JOIN tbl_rating ON tbl_rating.doc_id = tbl_doctor.doc_id
WHERE
    tbl_doctor.doc_category = $doc_category
GROUP BY
    tbl_doctor.doc_id
ORDER BY rating DESC")->result();

        return $result;
    }


    public function all_active_doctors_profile($doc_id)
    {

        $result = $this->db->select('*')
            ->from('tbl_doctor')
            ->where('doc_id', $doc_id)
            ->get()
            ->row();
        return $result;
    }


    public function all_active_ambulances()
    {
        $result = $this->db->select('*')
            ->from('tbl_ambulance')
            ->where('amb_status', 1)
            ->get()
            ->result();
        return $result;
    }


    public function get_all_active_hospitals()
    {
        $result = $this->db->select('*')
            ->from('tbl_hospital')
            ->where('hospital_status', 1)
            ->get()
            ->result();
        return $result;
    }


    public function get_all_active_hospital_doctors($id)
    {
//        $result = $this->db->select('*')
//            ->from('tbl_hospital')
//            ->join('tbl_doctor', 'tbl_hospital.hospital_id = tbl_doctor.hospital_id')
//            ->where('tbl_doctor.hospital_id', $id)
//            ->get()
//            ->result();

        $result = $this->db->query("SELECT
    IFNULL(AVG(tbl_rating.value),
    0) AS rating,
    COUNT(tbl_rating.rating_id) AS rating_count,
    tbl_hospital.*,
    tbl_doctor.*
FROM
    tbl_hospital
LEFT JOIN tbl_doctor ON tbl_hospital.hospital_id = tbl_doctor.hospital_id
LEFT JOIN tbl_rating ON tbl_rating.doc_id = tbl_doctor.doc_id
WHERE tbl_doctor.hospital_id = $id
GROUP BY
    tbl_doctor.doc_id
ORDER BY
    rating
DESC")
            ->result();

        return $result;

    }

    public function all_active_a_positive_donors($donor_blood_group)
    {


        $result = $this->db->select('*')
            ->from('tbl_donor')
            ->where(array('donor_status' => 1, 'donor_blood_group' => $donor_blood_group))
            ->get()->result();


        return $result;
    }


    public function all_active_a_negative_donors($donor_blood_group)
    {


        $result = $this->db->select('*')
            ->from('tbl_donor')
            ->where(array('donor_status' => 1, 'donor_blood_group' => $donor_blood_group))
            ->get()->result();


        return $result;
    }


    public function all_active_b_positive_donors($donor_blood_group)
    {


        $result = $this->db->select('*')
            ->from('tbl_donor')
            ->where(array('donor_status' => 1, 'donor_blood_group' => $donor_blood_group))
            ->get()->result();


        return $result;
    }


    public function all_active_b_negative_donors($donor_blood_group)
    {


        $result = $this->db->select('*')
            ->from('tbl_donor')
            ->where(array('donor_status' => 1, 'donor_blood_group' => $donor_blood_group))
            ->get()->result();


        return $result;
    }


    public function all_active_o_positive_donors($donor_blood_group)
    {


        $result = $this->db->select('*')
            ->from('tbl_donor')
            ->where(array('donor_status' => 1, 'donor_blood_group' => $donor_blood_group))
            ->get()->result();


        return $result;
    }


    public function all_active_o_negative_donors($donor_blood_group)
    {


        $result = $this->db->select('*')
            ->from('tbl_donor')
            ->where(array('donor_status' => 1, 'donor_blood_group' => $donor_blood_group))
            ->get()->result();


        return $result;
    }


    public function all_active_ab_positive_donors($donor_blood_group)
    {


        $result = $this->db->select('*')
            ->from('tbl_donor')
            ->where(array('donor_status' => 1, 'donor_blood_group' => $donor_blood_group))
            ->get()->result();


        return $result;
    }


    public function all_active_ab_negative_donors($donor_blood_group)
    {


        $result = $this->db->select('*')
            ->from('tbl_donor')
            ->where(array('donor_status' => 1, 'donor_blood_group' => $donor_blood_group))
            ->get()->result();


        return $result;
    }

}