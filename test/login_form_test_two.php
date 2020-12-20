<?php
//hours_test.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class HoursForm extends WebTestCase {

	  function testCorrectData() {
		$this->get(VIRTUAL_PATH . '/login.php');
		$this->assertResponse(200);

    $this->setField("Name", "");
		$this->setField("Password", "");
		$this->clickSubmit("Login");

		$this->assertResponse(200);
		$this->assertText("Please fill out this field.");
	}
  
}
