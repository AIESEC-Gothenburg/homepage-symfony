<?php

namespace AIESEC\MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MembershipController extends Controller {
    /**
     * @Route("/membership/about", name="membership_about")
     * @Template()
     */
    public function aboutAction() {
        return array('page' => 'membership');
    }

    /**
     * @Route("membership/opportunities", name="membership_opportunities")
     * @Template()
     */
    public function opportunitiesAction() {
        return array('page' => 'membership');
    }

    /**
     * @Route("membership/teams", name="membership_teams")
     * @Template()
     */
    public function teamsAction() {
        return array('page' => 'membership');
    }

    /**
     * @Route("membership/faq", name="membership_faq")
     * @Template()
     */
    public function faqAction() {
        return array('page' => 'membership');
    }

    /**
     * @Route("membership/apply", name="membership_apply")
     * @Template()
     */
    public function applyAction(Request $request) {

        if ($request->getMethod() === 'GET') {
            return array('page' => 'membership');
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
                                     ->setSubject('New membership application')
                                     ->setFrom('info@mdltec.com')
                                     ->setTo('gothenburg@aiesec.se')
                                     ->setBody($this->renderView('@AIESECMain/Membership/email.html.twig',
                                                                 $request->request->all()))
                                     ->attach(\Swift_Attachment::fromPath(realpath($file)));
            //->attach();

            $this->get('mailer')
                 ->send($message);

            return array('page'    => 'membership',
                         'message' => 'Thank you for your request, you will be contacted soon!');
        }
    }
}
