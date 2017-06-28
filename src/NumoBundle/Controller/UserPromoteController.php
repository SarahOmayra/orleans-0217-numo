<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 12/06/17
 * Time: 16:18
 */

namespace NumoBundle\Controller;

use NumoBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 * User Promote controller.
 *
 * @Route("memberstatus")
 */

class UserPromoteController extends Controller
{
    /**
     * Lists all pageContent entities.
     *
     * @Route("/", name="memberstatus_index")
     * @Method({"POST", "GET"})
     */

    public function indexAction(Request $request, User $user)
    {
        $form = $this->createForm('NumoBundle\Form\PromoteType', $user);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
//            $em = $this->getDoctrine()->getManager();
//            $user->addRole('ROLE_ADHERENT');
//            $em->flush();
            $this->getDoctrine()->getManager()->flush();
        }

        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('NumoBundle:User')->findAll();

        return $this->render('userpromote/index.html.twig', [
            'users' => $users,
            'form' => $form->createView(),
        ]);

    }

    /**
     * @param User $user
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/{id}", name="membertrust")
     */
    public function trustAction(User $user)
    {
        if ($user->getTrust() === 0){
            $user->setTrust(1);
        } else {
            $user->setTrust(0);
        }
        $em = $this->getDoctrine()->getManager();
        $em->flush();

        return $this->redirectToRoute('memberstatus_index');
    }

    /**
     *@Route("/{id}", name="memberpromote")
     *
     */
    public function promoteAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $user->addRole('ROLE_ADHERENT');
        $em->flush();

        return $this->redirectToRoute('memberstatus_index');
    }
}