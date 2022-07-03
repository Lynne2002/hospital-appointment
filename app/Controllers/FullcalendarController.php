<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\calendar;

class FullcalendarController extends BaseController
{
	public function __construct()
	{
		helper(["html"]);
	}
	public function index()
	{
		
		return view('fullcalendar');
	}

	public function loadData()
	{
		$event = new calendar();
		// on page load this ajax code block will be run
		$data = $event->where([
			'first_name'=>$this->request->getVar('first_name'),

			'date_scheduled >=' => $this->request->getVar('date_scheduled'),
			//'end <='=> $this->request->getVar('end')
		])->findAll();

		return json_encode($data);
	}

	public function ajax()
	{
		$event = new calendar();

		switch ($this->request->getVar('type')) {

				// For add calendar
			case 'add':
				$data = [
					'first_name' => $this->request->getVar('first_name'),
					'last_name' => $this->request->getVar('last_name'),
					'date_scheduled' => $this->request->getVar('date_scheduled'),
				
				];
				$event->insert($data);
				return json_encode($event);
				break;

				// For update calendar        
			case 'update':
				$data = [
					'first_name' => $this->request->getVar('first_name'),
					'date_scheduled' => $this->request->getVar('date_scheduled'),
					'last_name' => $this->request->getVar('last_name'),
				
					
				];

				$event_id = $this->request->getVar('appintment_id');
				
				$event->update($event_id, $data);

				return json_encode($event);
				break;

				// For delete calendar    
			case 'delete':

				$event_id = $this->request->getVar('appontment_id');

				$event->delete($event_id);

				return json_encode($event);
				break;

			default:
				break;
		}
	}
}