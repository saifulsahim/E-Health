<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_model extends CI_Model
{


    public function get_doctor_details($doc_email)
    {

        $doctor_details = $this->db->select('*')
            ->from('tbl_doctor')
            ->where('doc_email', $doc_email)
            ->get()
            ->row();


        return $doctor_details;

    }


    public function save_department()
    {
        $data['dept_name'] = $this->input->post('deptName', true);
        $data['dept_desc'] = $this->input->post('deptDesc', true);
        $data['dept_status'] = 1;

        $this->db->insert('tbl_dept', $data);
    }


    public function select_all_depts()
    {

        $result = $this->db->select('*')
            ->from('tbl_dept')
            ->get()
            ->result();

        return $result;
    }

    public function change_dept_status($dept_id, $status)
    {
        $data['dept_status'] = $status;
        $this->db->where('dept_id', $dept_id);
        $this->db->update('tbl_dept', $data);
    }


    public function edit_dept_details($dept_id)
    {

        $result = $this->db->select('*')
            ->from('tbl_dept')
            ->where('dept_id', $dept_id)
            ->get()
            ->row();
        return $result;

    }


    public function update_dept()
    {
        $data['dept_name'] = $this->input->post('deptName', true);
        $data['dept_desc'] = $this->input->post('deptDesc', true);

        $dept_id = $this->input->post('deptId');

        $this->db->where('dept_id', $dept_id)
            ->update('tbl_dept', $data);
    }

    public function get_all_active_depts()
    {

        $result = $this->db->select('*')
            ->from('tbl_dept')
            ->where('dept_status', 1)
            ->get()->result();
        return $result;
    }

//    public function upload_doctor_image(){
//
//        $config['upload_path']   = './uploads/';
//        $config['allowed_types'] = 'gif|jpg|png';
//        $config['max_size']      = '10000';//kb
//        $config['max_width']     = '2024';
//        $config['max_height']    = '1000';
//
//
//        $this->load->library('upload',$config);
//        if($this->upload->do_upload('docImage')){
//            $data = $this->upload->data();
//            $image_path= "uploads/$data[file_name]";
//            return $image_path;
//
//        }else{
//            $error=  $this->upload->display_errors();
//            print_r($error);
//        }
//    }


    public function save_doctor($doctor_image)
    {

        //$id = $this->session->userdata('admin_id');
        // $doctor_data['admin_id'] = $id;
        $doctor_data['doc_name'] = $this->input->post('docName', true);

        $doctor_data['doc_email'] = $this->input->post('docEmail', true);
        // $doctor_data['doc_password'] =$this->input->post('docPassword',true);
        $doctor_data['doc_mobile_no'] = $this->input->post('docMobileNo', true);
        $doctor_data['doc_qualification'] = $this->input->post('docQual', true);
        $doctor_data['doc_designation'] = $this->input->post('docDesignation', true);
        $doctor_data['doc_bmdc'] = $this->input->post('docBMDC', true);
        $doctor_data['doc_category'] = $this->input->post('docCategory', true);
        $doctor_data['symptoms'] = $this->input->post('symptoms', true);
        $doctor_data['disease'] = $this->input->post('disease', true);
        $doctor_data['doc_chamber'] = $this->input->post('docChamber', true);
        $doctor_data['doc_birth_date'] = $this->input->post('docBirthDate', true);
        $doctor_data['hospital_id'] = $this->input->post('hosName', true);
        $doctor_data['doc_fee'] = $this->input->post('docFees', true);
        $doctor_data['doc_join_date'] = $this->input->post('docJoinDate', true);
        $doctor_data['doc_status'] = 2;

        $doctor_data['doc_birth_date'] = date('Y-m-d', strtotime($doctor_data['doc_birth_date']));
        $doctor_data['doc_join_date'] = date('Y-m-d', strtotime($doctor_data['doc_join_date']));


        $doc_password = $this->input->post('docPassword', true);
        $encrypted_password = password_hash($doc_password, PASSWORD_DEFAULT);
        $doctor_data['doc_password'] = $encrypted_password;
        //$tDate = date('Y-m-d', strtotime($toDate));


        /*if ($this->session->userdata('admin_role') == 'Admin') {
            $doctor_data['admin_id'] = $this->input->post('admin_id', true);
        } else {
            $doctor_data['admin_id'] = $this->session->userdata('admin_id');
        }*/

        $doctor_data['doc_image'] = $doctor_image;

        $this->db->insert('tbl_doctor', $doctor_data);
        return $this->db->insert_id();

//        echo '<pre>';
//        print_r($doctor_data);
//        exit();

    }

    public function save_doctor_for_login($insert_id, $doctor_image)
    {
        $doctor_data['admin_name'] = $this->input->post('docName', true);
        $doctor_data['admin_email'] = $this->input->post('docEmail', true);
        $doc_password = $this->input->post('docPassword', true);
        $encrypted_password = password_hash($doc_password, PASSWORD_DEFAULT);
        $doctor_data['admin_password'] = $encrypted_password;
        $doctor_data['admin_image'] = $doctor_image;
        $doctor_data['admin_role'] = "Doctor";
        $doctor_data['admin_status'] = 1;  //for inactive doctors
        $doctor_data['insert_id'] = $insert_id;
        $this->db->insert('tbl_admin', $doctor_data);
    }

    public function get_data_by_user($id)
    {
        $result = $this->db->select('*')->where('doc_id', $id)
            ->from('tbl_doctor')
            ->get()
            ->result();

        return $result;
    }


    public function select_all_pending_doctors()
    {
        $result = $this->db->select('*')
            ->from('tbl_doctor')
            ->where('doc_status', 2)
            ->get()
            ->result();

        return $result;
    }


    public function get_all_pending_doctors()
    {

        $result = $this->db->select('count(*) as count')
            ->from('tbl_doctor')
            ->where('doc_status', 2)
            ->get()
            ->result();

        return $result;

    }


    public function select_all_doctors()
    {
        $result = $this->db->select('*')
            ->from('tbl_doctor')
            ->get()
            ->result();

        return $result;
    }

    public function get_doctors_for_query($query)
    {
        $result = $this->db->query("SELECT
    IFNULL(AVG(tbl_rating.value),
    0) AS rating,
    COUNT(tbl_rating.rating_id) AS rating_count,
    tbl_doctor.*
FROM
    tbl_doctor
LEFT JOIN tbl_rating ON tbl_rating.doc_id = tbl_doctor.doc_id
WHERE tbl_doctor.doc_name LIKE '%$query%' OR tbl_doctor.symptoms LIKE '%$query%' OR tbl_doctor.disease LIKE '%$query%'
GROUP BY
    tbl_doctor.doc_id
ORDER BY
    rating
DESC")
            ->result();

        return $result;
    }

    public function get_recommended_doctors()
    {
        $result = $this->db->query('SELECT
    IFNULL(AVG(tbl_rating.value),
    0) AS rating,
    COUNT(tbl_rating.rating_id) AS rating_count,
    tbl_doctor.*
FROM
    tbl_doctor
LEFT JOIN tbl_rating ON tbl_rating.doc_id = tbl_doctor.doc_id
GROUP BY
    tbl_doctor.doc_id
ORDER BY
    rating
DESC
LIMIT 5')
            ->result();

        return $result;
    }

    public function get_recommended_doctors_by_category($category_id)
    {
        $result = $this->db->query("SELECT
    IFNULL(AVG(tbl_rating.value),
    0) AS rating,
    COUNT(tbl_rating.rating_id) AS rating_count,
    tbl_doctor.*
FROM
    tbl_doctor
LEFT JOIN tbl_rating ON tbl_rating.doc_id = tbl_doctor.doc_id
WHERE tbl_doctor.doc_category = $category_id
GROUP BY
    tbl_doctor.doc_id
ORDER BY
    rating
DESC
LIMIT 5")
            ->result();

        return $result;
    }

    public function change_doctor_status($doctor_id, $status)
    {
        $data['doc_status'] = $status;
        $this->db->where('doc_id', $doctor_id);
        $this->db->update('tbl_doctor', $data);
    }

    public function view_doctor_details($doctor_id)
    {

        $result = $this->db->select('*')
            ->from('tbl_doctor')
            ->where('doc_id', $doctor_id)
            ->get()
            ->row();
        return $result;
    }


    public function edit_doctor_details($doctor_id)
    {

        $result = $this->db->select('*')
            ->from('tbl_doctor')
            ->where('doc_id', $doctor_id)
            ->get()
            ->row();
        return $result;
    }


    function update_doctor($doctor_image)
    {

        $doctor_data = array();
        $doctor_id = $this->input->post('docId', TRUE);
        $doctor_data['doc_name'] = $this->input->post('docName', true);
        $doctor_data['doc_email'] = $this->input->post('docEmail', true);
        $doctor_data['doc_mobile_no'] = $this->input->post('docMobileNo', true);
        $doctor_data['doc_qualification'] = $this->input->post('docQual', true);
        $doctor_data['doc_designation'] = $this->input->post('docDesignation', true);
        $doctor_data['doc_category'] = $this->input->post('docCategory', true);
        $doctor_data['symptoms'] = $this->input->post('symptoms', true);
        $doctor_data['disease'] = $this->input->post('disease', true);
        //$doctor_data['doc_chamber'] = $this->input->post('docChamber', true);
        $doctor_data['hospital_id'] = $this->input->post('hosName', true);
        $doctor_data['doc_birth_date'] = $this->input->post('docBirthDate', true);
        $doctor_data['doc_fee'] = $this->input->post('docFees', true);
        $doctor_data['doc_join_date'] = $this->input->post('docJoinDate', true);
        $doctor_data['doc_status'] = 1;
        $doctor_data['doc_image'] = $doctor_image;

        $doctor_data['doc_birth_date'] = date('Y-m-d', strtotime($doctor_data['doc_birth_date']));
        $doctor_data['doc_join_date'] = date('Y-m-d', strtotime($doctor_data['doc_join_date']));


//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->db->where('doc_id', $doctor_id);
        $this->db->update('tbl_doctor', $doctor_data);

    }


    public function delete_doctor_by_id($doctor_id)
    {
        $this->db->where('doc_id', $doctor_id)
            ->delete('tbl_doctor');
        $this->db->where('insert_id', $doctor_id)
            ->where('admin_role', 'Doctor')
            ->delete('tbl_admin');

    }

    public function get_all_active_doctors()
    {

        $result = $this->db->select('*')
            ->from('tbl_doctor')
            ->where('doc_status', 1)
            ->get()->result();
        return $result;
    }

    public function get_all_doctor_categories()
    {
        $result = $this->db->select('*')
            ->from('tbl_doctor')
            ->where('doc_status', 1)
            ->get()->result();
        return $result;
    }

    public function get_all_active_doctors_images()
    {
        $result = $this->db->select('*')
            ->from('tbl_doctor')
            ->where('doc_status', 1)
            ->get()->result();
        return $result;
    }


    public function get_doctor_record_for_image($doc_image)
    {
        return $this->db->where('doc_id', $doc_image)->get('tbl_doctor')->row();
    }


    public function get_dept_record($dept_id)
    {
        return $this->db->where('dept_id', $dept_id)->get('tbl_dept')->row();
    }


    public function get_all_lists_by_id($id)
    {
        $result = $this->db->select('*')->where('doc_id', $id)
            ->from('tbl_doctor')
            ->get()
            ->result();

        return count($result);

    }


}