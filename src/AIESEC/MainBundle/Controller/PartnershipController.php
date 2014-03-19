<?php

namespace AIESEC\MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PartnershipController extends Controller {
    /**
     * @Route("partnership/companies", name="partnership_about")
     * @Template()
     */
    public function companiesAction() {
        return array('page' => 'partnership');
    }

    /**
     * @Route("partnership/getintern", name="partnership_getintern")
     * @Template()
     */
    public function getinternAction() {
        return array('page' => 'membership');
    }

    /**
     * @Route("partnership/info", name="partnership_info")
     * @Template()
     */
    public function partnershipAction() {
        return array('page' => 'membership');
    }
}
