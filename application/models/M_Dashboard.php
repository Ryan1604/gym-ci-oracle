<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Dashboard extends CI_Model {
	
    public function service()
	{
        $sql = "SELECT count(id) as a FROM transaction WHERE status = 2";
        return $this->db->query($sql)->result();
	}

	public function alkes()
	{
        $sql = "SELECT count(id_sewa) as b FROM sewa_alkes WHERE status = 2";
        return $this->db->query($sql)->result();
	}

	public function ambulance()
	{
        $sql = "SELECT count(id_sewa) as c FROM sewa_ambulance WHERE status_peminjaman = 1";
        return $this->db->query($sql)->result();
	}
}
