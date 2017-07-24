<?php

namespace CodeExperts\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/another")
 */
class DefaultController extends Controller
{
	/**
	 * @Route("/", name="admin.users")
	 */
    public function indexAction()
    {
        return $this->render('EcommerceBundle:Default:index.html.twig');
    }
}
