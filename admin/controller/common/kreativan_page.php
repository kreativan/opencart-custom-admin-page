<?php
class ControllerCommonKreativanPage extends Controller {
	public function index() {
		$this->load->language('common/kreativan_page');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['user_token'] = $this->session->data['user_token'];

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/kreativan_page', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('common/kreativan_page', 'user_token=' . $this->session->data['user_token'], true)
		);

    $data["kreativan"] = [
      "Name" => "Ivan Milincic",
      "Job" => "Web Developer",
      "Email" => "kreativan.dev@gmail.com",
      "Website" => "kreativan.dev",
    ];


		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('common/kreativan_page', $data));

	}
}
