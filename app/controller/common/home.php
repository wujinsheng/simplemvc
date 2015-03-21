<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$data = [
			'green'=> 'green',
			'red' => 'bloody',
		];
		$this->load->model('block');
		
		$list = $this->model_block->lists();
		
		var_dump($list);
		
		$this->response->setOutput($this->load->view('default/template/common/home.tpl', $data));
	}
}