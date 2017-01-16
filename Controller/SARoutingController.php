<?php

namespace Smile\EzSARoutingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SARoutingController extends Controller
{
    public function switchAction($siteaccess, $route)
    {
        return $this->render('', array('name' => $name));
    }
}
