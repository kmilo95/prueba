<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct() {
        // $this->load->model("CrudModel");
    }

    public function index() {
        $this->load->view('inicio');
    }

    public function getData() {
        echo $this->Datatables
                ->select("id,documento,nombres,correo,telefono,ciudad,lugar,fecha")
                ->from("informacion")
                ->generate();
    }

    public function gestion() {
        $data = $this->input->post();
        $id = $data["id"];
        unset($data["id"]);
        if ($id == '') {
            $id = $this->CrudModel->guardar($data);
        } else {
            $this->CrudModel->editar($id, $data);
        }

        echo json_encode(array("id" => $id, "response" => true));
    }

    public function delete() {
        $data = $this->input->post();
        $id = $this->CrudModel->borrar($data["id"]);
    }

}
