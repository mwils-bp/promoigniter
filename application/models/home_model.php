<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

 public function __construct() {
   parent::__construct();
 }

 function update_site($id, $attr, $newval) {
 $this->load->database();
 $newData = array(
 $attr => $newval
 );
 $this->db->where('settings_id', $id);
 $this->db->update('site', $newData);
 }
 function update_nav($id, $newval) {
 $this->load->database();
 $newData = array(
 "content-name" => $newval
 );
 $this->db->where('content_id', $id);
 $this->db->update('sections', $newData);
 }
 function update_text($id, $newval) {
 $this->load->database();
 $newData = array(
 "text" => $newval
 );
 $this->db->where('content_id', $id);
 $this->db->update('sections', $newData);
 }
 function update_extras($id, $newval) {
 $this->load->database();
 $newData = array(
 "extras" => $newval
 );
 $this->db->where('content_id', $id);
 $this->db->update('sections', $newData);
 }

 function update_header($id, $newval) {
 $this->load->database();
 $newData = array(
 "header" => $newval
 );
 $this->db->where('content_id', $id);
 $this->db->update('sections', $newData);
 }
 function get_site() {
  $query = $this->db->get('site'); 
  return $query->row_array();
  }
 function get_sections() {
  $this->db->select('content_id, content-type, content-name, header, text, extras, class');
  $query = $this->db->get("sections");
  return $query->result_array();
  }
}
