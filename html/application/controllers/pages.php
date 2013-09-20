<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
		
	public function index()
	{
		// делаем заголовок

		$data['page_title'] = 'Промышленное оборудование из стеклопластика,
		оборудование для водоподготовки, насосное и котельное оборудовани | Инжиниринг-Урал.рф';

		$this->load->view('header', $data);
		$this->load->view('main_page');
		$this->load->view('footer');		
	}

	public function show_category($category_id)
	{
		// делаем заголовок страницы

		switch ($category_id)
		{
			case 'stekloplastik':
			$data['page_title'] = 'Оборудование из стеклопластика';
			break;

			case 'vodopodgotovka':
			$data['page_title'] = 'Оборудование для водоподготовки';
			break;

			case 'kotelnoe':
			$data['page_title'] = 'Котельное оборудование';
			break;

			case 'nasosnoe':
			$data['page_title'] = 'Насосное оборудование';
			break;

			case 'avtomatike':
			$data['page_title'] = 'Автоматика';
			break;

			default:
				$data['page_title'] = '';
				break;
		}

		$data['page_title'] .= " | Инжиниринг-Урал.рф";

		$this->load->view('header', $data);
		$this->load->view($category_id.'_menu');
		$this->load->view($category_id);
		$this->load->view('footer');
	}
	
	public function show_product($category_id, $product_id)
	{
		// делаем заголовок страницы

		switch ($product_id)
		{
			// оборудование из стеклопластика

			case 'promyshlennye-truby':
			$data['page_title'] = 'Промышленные трубы';
			break;			

			case 'gazohody':
			$data['page_title'] = 'Газоходы';
			break;

			case 'pylegazootchistka':
			$data['page_title'] = 'Оборудование для пылегазоотчистки';
			break;

			case 'akkumuliruyushaya-emkost':
			$data['page_title'] = 'Аккумулирующая емкость';
			break;

			case 'akkumuliruyushaya-emkost':
			$data['page_title'] = 'Аккумулирующая емкость';
			break;

			case 'peskoulovitel':
			$data['page_title'] = 'Пескоуловитель';
			break;

			case 'nefteulovitel':
			$data['page_title'] = 'Нефтеуловитель';
			break;

			case 'sorbcionniy-filtr':
			$data['page_title'] = 'Сорбционный фильтр';
			break;

			case 'emkostnoe':
			$data['page_title'] = 'Емкостное оборудование';
			break;

			case 'nasosnie-stancii':
			$data['page_title'] = 'Комплектные насосные станции';
			break;

			case 'giroulovitel':
			$data['page_title'] = 'Жироуловитель';
			break;

			case 'kolodci':
			$data['page_title'] = 'Колодцы';
			break;

			// оборудование для водоподготовки

			case 'nanofiltraciya':
			$data['page_title'] = 'Установка нанофильтрации';
			break;

			case 'ogo':
			$data['page_title'] = 'Установка озоново-гидроксильной обрабоки';
			break;

			case 'ochistka-goryachey-vody':
			$data['page_title'] = 'Установка очистки горячей воды';
			break;

			// котельное оборудование

			case 'cybertop':
			$data['page_title'] = 'Котлы "Кибертоп"';
			break;

			case 'insineratory':
			$data['page_title'] = 'Инсинераторы, крематоры';
			break;

			default:
				$data['page_title'] = '';
				break;
		}

		$data['page_title'] .= " | Инжиниринг-Урал.рф";

		// добавляем кусок с контактами

		$data['contact_us'] = $this->load->view('contact_us','', true);
		// $data['contact_form'] = $this->load->view('contact_form','', true);

		$this->load->helper('form'); 

		// рендерим страницу

		$this->load->view('header', $data);
		$this->load->view($category_id.'_menu');
		$this->load->view($category_id.'_'.$product_id, $data);
		$this->load->view('footer');
	}

	public function show_page($page_id)
	{

	}
}