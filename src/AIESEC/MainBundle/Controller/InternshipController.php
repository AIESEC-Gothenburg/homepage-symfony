<?php

namespace AIESEC\MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InternshipController extends Controller {
    /**
     * @Route("internship/about", name="internship_about")
     * @Template()
     */
    public function aboutAction() {
        return array('page' => 'internship');
    }

    /**
     * @Route("internship/gcdp", name="internship_gcdp")
     * @Template()
     */
    public function gcdpAction() {
        return array('page' => 'internship');
    }

    /**
     * @Route("internship/gip", name="internship_gip")
     * @Template()
     */
    public function gipAction() {
        return array('page' => 'internship');
    }

    /**
     * @Route("internship/faq", name="internship_faq")
     * @Template()
     */
    public function faqAction() {
        return array('page' => 'internship');
    }

    /**
     * @Route("internship/apply", name="internship_apply")
     * @Template()
     */
    public function applyAction(Request $request) {

        if ($request->getMethod() === 'GET') {
            return array('page' => 'internship');
        }

        if ($request->getMethod() === 'POST') {

            // Get the attached filed
            //$file = $request->files->all()[0];
            $file = null;
            foreach ($request->files as $uploadedFile) {
                $name = $uploadedFile->getClientOriginalName();
                $file = $uploadedFile->move('../app/cache', $name);
            }

            $message = \Swift_Message::newInstance()
                                     ->setSubject('New internship application')
                                     ->setFrom('info@mdltec.com')
                                     ->setTo('gothenburg@aiesec.se')
                                     ->setBody($this->renderView('@AIESECMain/Internship/email.html.twig',
                                                                 $request->request->all()))
                                     ->attach(\Swift_Attachment::fromPath(realpath($file)));
            //->attach();

            $this->get('mailer')
                 ->send($message);

            return array('page'    => 'internship',
                         'message' => 'Thank you for your request, you will be contacted soon!');
        }
    }
}
