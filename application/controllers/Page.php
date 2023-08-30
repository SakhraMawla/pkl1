<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
	public function index()
	{
		$data['active'] = 'active';
		$this->load->view('dashboard');
	}

	public function test()
	{
		$this->load->view('test');
	}

	public function format($ticket)
	{
		$active = '';
		$news = '';
		$datatable = $ticket;

		switch ($ticket) {
			case 'open_ticket':
				$active = 1;
				$news = 'Open Ticket';
				break;
			case 'view_ticket':
				$active = 2;
				$news = 'View Ticket';
				break;
			case 'form_ticket':
				$active = 3;
				$news = 'Form Ticket';
				break;
			case 'ticket';
				$active = 4;
				$news = 'Ticket';
				break;
			case 'login';
				$active = 5;
				$news = 'Login';
				break;	
		}
		$data['title'] = "$news";
		$data['active'] = $active;
		$data['news'] = $news;
		$data['datatable'] = $datatable;

		$this->load->view('ticket.php', $data);
	}
}
