<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TicketsController extends Controller
{

    public function ListAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $status = $request->get('status');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $id = $user->getId();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT a.*,b.username FROM `ticket` as a join customer as b on a.raisedBy=b.id and a.ticketStatus='$status' AND a.branch='$branch' order by a.id desc");
        $sql->execute();
        $row = $sql->fetchAll();

        $sql = $connection->prepare("SELECT * FROM `ticket` WHERE ticketStatus='Open' AND branch='$branch'");
        $sql->execute();
        $opencount = $sql->fetchAll();

        $sql = $connection->prepare("SELECT * FROM `ticket` WHERE ticketStatus='Closed' AND branch='$branch'");
        $sql->execute();
        $closedcount = $sql->fetchAll();

        return $this->render('AppBundle:Admin:Tickets/all.html.twig', array(
            'data' => $row, "msg" => '', 'opencount' => count($opencount), 'closedcount' => count($closedcount),
        ));
    }

    public function viewAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();

        $sql = $connection->prepare("SELECT a.*,b.username,b.mobileNo,b.email FROM `ticket` as a join customer as b on a.raisedBy=b.id  where a.ref='$id' AND a.branch='$branch' order by a.id");
        $sql->execute();
        $row = $sql->fetchAll();

        $sqlattach = $connection->prepare("SELECT * from attachment where ref='$id'");
        $sqlattach->execute();
        $rowattach = $sqlattach->fetchAll();
        return $this->render('AppBundle:Admin:Tickets/view.html.twig', array(
            'data' => $row, "attachment" => $rowattach,
        ));
    }
    public function updateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $message = $request->get('remarks');
        $status = $request->get('status');

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();

        $res = $em->getConnection()->exec("update ticket set remarks='$message',ticketStatus='$status' where ref='$id' AND branch='$branch'");

        $request->getSession()->getFlashBag()->add('success', "Ticket Status Updated!");
        return $this->redirectToRoute('view_tickets', array('id' => $id));
    }

}
