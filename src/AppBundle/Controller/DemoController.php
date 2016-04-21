<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DemoController extends Controller
{
	/**
	 * @Route("/hello/{name}",name="_demo_hello")
	 * @Template()
	*/

public function helloAction($name)
{
	return array('name' => $name);
}
}
?>
