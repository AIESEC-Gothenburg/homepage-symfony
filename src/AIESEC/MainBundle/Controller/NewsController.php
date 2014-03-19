<?php

namespace AIESEC\MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller {
    /**
     * @Route("news", name="news")
     * @Template()
     */
    public function indexAction() {
        return array('page' => 'news');
    }

    /**
     * @Route("recruit", name="news_recruit")
     * @Template()
     */
    public function recruitAction() {
        return array('page' => 'news');
    }
}
