<?php
class ControllerExtensionModuleImageZoomNik extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/image_zoom_nik');
        static $module = 0;

		$data = $setting;

        $data['module'] = $module++;

//        var_dump($data);

        return $this->load->view('extension/module/image_zoom_nik', $data);
	}
}