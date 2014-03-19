<?php

namespace AIESEC\MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller {
    /**
     * @Route("contact", name="contact")
     * @Template()
     */
    public function contactusAction(Request $request) {
        if ($request->getMethod() === 'GET') {
            return array('page' => 'contact');
        }

        if ($request->getMethod() === 'POST') {

            $message = \Swift_Message::newInstance()
                                     ->setSubject('New contact form submission')
                                     ->setFrom('info@mdltec.com')
                                     ->setTo('gothenburg@aiesec.se')
                                     ->setBody($this->renderView('@AIESECMain/Contact/email.html.twig',
                                                                 $request->request->all()));

            $this->get('mailer')
                 ->send($message);

            return array('page'    => 'contact',
                         'message' => 'Thank you for contacting us, we will respond soon!');
        }
    }
}
