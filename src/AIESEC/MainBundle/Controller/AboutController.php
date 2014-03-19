<?php

namespace AIESEC\MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller {
    /**
     * @Route("about/us", name="about_us")
     * @Template()
     */
    public function aboutusAction() {
        return array('page' => 'about');
    }

    /**
     * @Route("about/testimonies", name="about_testimonies")
     * @Template()
     */
    public function testimoniesAction() {
        return array('page' => 'about');
    }
}
