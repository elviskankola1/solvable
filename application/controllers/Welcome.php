<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
	}
	









	public function index()
	{
		
		$this->form_validation->set_rules('login','login','required|trim',
		[
			'required'=>'le champ est obligatoire'
		]);

		$this->form_validation->set_rules('passe','pass','required|trim',
		[
			'required'=>'le champ est obligatoire'
		]);
		

		if($this->form_validation->run())
		{

			$login = $this->input->post('login');
			$pass = $this->input->post('passe');

			$reccupeUser = $this->Main_model->loginModel($login,$pass);
			if(count($reccupeUser)>0)
			{
				$userUnique = $reccupeUser[0];

				$data = [ 
					
					'statut'=>true,
				];
				 
				$session = $this->session->set_userdata($data);
				redirect('welcome/home/'.base64_encode($this->session->nom));
			}
			else 
			{
				$failed['fail'] = "pas de compte correspondant aux infos fournies";
				$this->session->set_flashdata($failed);
				$this->load->view('headerlog');
				$this->load->view('index');
				$this->load->view('footerlog');
			}


		}
		else
		{

			$this->load->view('headerlog');
			$this->load->view('index');
			$this->load->view('footerlog');
			

		}

	}



	public function home()
	{
		if ($this->session->statut) 
		{
			$data['nombreInscrits'] = $this->Main_model->countInscritsDate();
			$data['nombrePaiements'] = $this->Main_model->countPaiementDate();

			$data['nombreTotalInscrit'] = $this->Main_model->countInscrits();
			$data['nombreTotalPaiements'] = $this->Main_model->countPaiement();
			$data['eleveDate'] = $this->Main_model->getAllInscritsDate();
			//$data['nombrePaiements'] = $this->Main_model->countPaiementDate();
			$this->load->view('header',$data);
			$this->load->view('board',$data);
			$this->load->view('footer');
		}
		else 
		{
			redirect();
		}
	}

	public function inscription()
	{

		$this->form_validation->set_rules('nom','nom','required');
		$this->form_validation->set_rules('prenom','prenom','required');
		$this->form_validation->set_rules('postnom','postnom','required');
		$this->form_validation->set_rules('montant','montant','required');
		if($this->form_validation->run())
		{

			$nom = $this->input->post('nom');
			$prenom = $this->input->post('prenom');
			$postnom = $this->input->post('postnom');
			$naissance = $this->input->post('naissance');
			$genre = $this->input->post('genre');
			$secours = $this->input->post('secours');
			$classe = $this->input->post('classe');
			$montant = $this->input->post('montant');

			$data = [

				'nomEleve'=>$nom,
				'prenomEleve'=>$prenom,
				'postnomEleve'=>$postnom,
				'genre'=>$genre,
				'numeroSecours'=>$secours,
				'dateNaissanceEleve'=>$naissance,
				'classeEleve'=>$classe,
				'dateInscription'=>date('Y-m-d'),
				'inscrit'=>$montant
			];

			$this->Main_model->Inscrire($data);
			$succes['ok'] = 'OPERATION EFFECTUEE';
			$this->session->set_flashdata($succes);
			$data['nombreInscrits'] = $this->Main_model->countInscritsDate();
			$data['nombrePaiements'] = $this->Main_model->countPaiementDate();
			$data['inscrits'] = $this->Main_model->getAllInscrits();
			$data['payants'] = $this->Main_model->countPaiement();
			$this->load->view('header',$data);
			$this->load->view('inscription');
			$this->load->view('footer');


		}
		else 
		{
			$data['nombreInscrits'] = $this->Main_model->countInscritsDate();
			$data['nombrePaiements'] = $this->Main_model->countPaiementDate();
			$data['inscrits'] = $this->Main_model->getAllInscrits();
			$data['payants'] = $this->Main_model->countPaiement();
			$this->load->view('header',$data);
			$this->load->view('inscription');
			$this->load->view('footer');
		}

	}


	public function paiement()
	{

		$this->form_validation->set_rules('montant','nom','required');

		if($this->form_validation->run())
		{

			$eleve = $this->input->post('idEleve');
			$montant = $this->input->post('montant');
			$mois = $this->input->post('mois');

			$data = [
				
				'idEleve'=>$eleve,
				'montantPaiement'=>$montant,
				'idMois'=>$mois,
				'datePaiement'=>date('Y-m-d')
			];
			
			$this->Main_model->payer($data);
			$succes['ok'] = 'OPERATION EFFECTUEE';
			$this->session->set_flashdata($succes);
			$data['nombreInscrits'] = $this->Main_model->countInscritsDate();
			$data['nombrePaiements'] = $this->Main_model->countPaiementDate();
			$data['eleves'] = $this->Main_model->getAllInscrits();
			$data['months'] = $this->Main_model->getMoth();
			$this->load->view('header',$data);
			$this->load->view('paiement',$data);
			$this->load->view('footer');

		}
		else 
		{

			//$data['inscrits'] = $this->Main_model->getAllInscritsDate();
			$data['nombreInscrits'] = $this->Main_model->countInscritsDate();
			$data['nombrePaiements'] = $this->Main_model->countPaiementDate();
			$data['eleves'] = $this->Main_model->getAllInscrits();
			$data['months'] = $this->Main_model->getMoth();
			$this->load->view('header',$data);
			$this->load->view('paiement',$data);
			$this->load->view('footer');

		}

	}

	public function enOrdre()
	{

		$data['nombreInscrits'] = $this->Main_model->countInscritsDate();
		$data['nombrePaiements'] = $this->Main_model->countPaiementDate();
		$data['eleves'] = $this->Main_model->PaiementEleveJoin();
		$this->load->view('header',$data);
		$this->load->view('ordre',$data);
		$this->load->view('footer');

	}


	public function tous()
	{

		$data['nombreInscrits'] = $this->Main_model->countInscritsDate();
		$data['nombrePaiements'] = $this->Main_model->countPaiementDate();
		$data['eleves'] = $this->Main_model->getAllInscrits();
		$this->load->view('header',$data);
		$this->load->view('tousleseleves',$data);
		$this->load->view('footer');

	}

	public function parClasse()
	{
		$data['nombreInscrits'] = $this->Main_model->countInscritsDate();
		$data['nombrePaiements'] = $this->Main_model->countPaiementDate();
		$this->load->view('header',$data);
		$this->load->view('classes');
		$this->load->view('footer');
	}

	public function eleveClasse()
	{
		$classe = $this->uri->segment(3);
		
		if($classe)
		{
			$data['eleves'] = $this->Main_model->getClasseEleve($classe);
			$data['nombreInscrits'] = $this->Main_model->countInscritsDate();
			$data['nombrePaiements'] = $this->Main_model->countPaiementDate();
			$data['classe'] = $classe;
			$this->load->view('header',$data);
			$this->load->view('eleves',$data);
			$this->load->view('footer');
		}
		else 
		{
			redirect();
		}

	}

	public function eleveDetail()
	{
		$eleve = $this->uri->segment(3);
		
		if($eleve)
		{
			
			$data['nombreInscrits'] = $this->Main_model->countInscritsDate();
			$data['nombrePaiements'] = $this->Main_model->countPaiementDate();
			$data['eleves'] = $this->Main_model->getOneEleve($eleve);
			$data['infos'] = $this->Main_model->getOneElevePaiement($eleve);
			
			$this->load->view('header',$data);
			$this->load->view('detaileleve',$data);
			$this->load->view('footer');
		}
		else 
		{
			redirect();
		}

	}





}
