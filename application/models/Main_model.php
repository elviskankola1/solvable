<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model
{

    private $tableInscription = 'eleves';
    private $tablePaiement = 'paiements';
    private $tableMois = 'mois';
    private $tableAPayer = 'apayers';
    public function __construct()
    {
        parent::__construct();
    }

    public function Inscrire($data)
    {
        $this->db->insert($this->tableInscription,$data);
    }

    public function payer($data)
    {

        $this->db->insert($this->tablePaiement,$data);

    }

    public function getAllInscrits()
    {
        return $this->db->get($this->tableInscription)->result();
    }


    public function getAllInscritsDate()
    {
        $this->db->where('dateInscription',date('Y-m-d'));
        return $this->db->get($this->tableInscription)->result();
    }

    
    public function PaiementEleveJoin()
    {
        $this->db->select();
        $this->db->from($this->tablePaiement);
		$this->db->join($this->tableInscription,'eleves.idEleve = paiements.idEleve');
		$this->db->join($this->tableMois,'mois.idMois = paiements.idMois');
        return $this->db->get()->result();
    }

    public function getAllEnOrdre()
    {
        return $this->db->get($this->tablePaiement)->result();
    }

    public function getMoth()
    {
        return $this->db->get($this->tableMois)->result();
    }

    public function countInscrits()
    {
        return $this->db->count_all_results($this->tableInscription);
    }

    public function countPaiement()
    {
        return $this->db->count_all_results($this->tablePaiement);
    }

    public function countInscritsDate()
    {
        $this->db->where('dateInscription',date('Y-m-d'));
        return $this->db->count_all_results($this->tableInscription);
    }

    public function countPaiementDate()
    {
        $this->db->where('datePaiement',date('Y-m-d'));
        return $this->db->count_all_results($this->tablePaiement);
    }

    public function getAPayers()
    {

        $this->db->where('annee',date('Y'));
        return $this->db->get($this->tableAPayer)->result();

    }

    public function getClasseEleve($classe)
    {
		$this->db->select();
        $this->db->from($this->tablePaiement);
		$this->db->where('classeEleve',$classe);
		$this->db->join($this->tableInscription,'eleves.idEleve = paiements.idEleve');
		$this->db->join($this->tableMois,'mois.idMois = paiements.idMois');
        return $this->db->get()->result();
    }

    public function getOneElevePaiement($id)
    {
        $this->db->select();
        $this->db->from($this->tablePaiement);
        $this->db->where('paiements.idEleve',$id);
        $this->db->join($this->tableInscription,'eleves.idEleve = paiements.idEleve');
        $this->db->join($this->tableMois,'mois.idMois = paiements.idMois');
        return $this->db->get()->result();
    }

    public function getOneEleve($id)
    {
        $this->db->where('idEleve',$id);
        return $this->db->get($this->tableInscription)->result();
	}
	

	public function loginModel($login,$pass)
	{
		$this->db->where(['login'=>$login,'pass'=>$pass]);
		return $this->db->get('comptes')->result();
	}

}
