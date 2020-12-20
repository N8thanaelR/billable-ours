<?php
//hours_test.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class HoursForm extends WebTestCase {

	  function testCorrectData() {
		$this->get(VIRTUAL_PATH . '/home.php');
		$this->assertResponse(200);

    $this->setField("Home");
		$this->clickSubmit("Learn More");

		$this->assertResponse(200);
		$this->assertText("About Billable Our$");
	}
  
}
