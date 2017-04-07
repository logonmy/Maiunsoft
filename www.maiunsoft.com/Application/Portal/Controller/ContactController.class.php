<?php

namespace Portal\Controller;

class ContactController extends PortalController {

	public function index() {
		$this->page_title = "联系方式";
		$this->keywords = "绿地北郊,沪太路,宝安公路,400-021-2133,61846052";
		$this->description = "上海市宝山区沪太路5355号";

		$this->showPage('About:contact');
	}

} // end contraoller