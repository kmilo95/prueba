<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CrudModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db->database();
    }

    public function guardar($data) {
        $this->db->trans_begin();

        $this->db->insert("informacion", $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return $this->db->insert_id();
        }
    }

    public function editar($id, $data) {
        $this->db->trans_begin();

        $this->db
                ->where("id", $id)
                ->update("informacion", $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return $id;
        }
    }

    public function borrar($id, $data) {
        $this->db->trans_begin();

        $this->db
                ->where("id", $id)
                ->delete("informacion");
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return $id;
        }
    }

}
