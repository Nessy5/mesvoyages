<?php

namespace App\Controller\admin;
// use Symfony\Component\HttpFoundation\Request;


use App\Entity\Visite;
use App\Repository\VisiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of AdminVoyageController
 *
 * @author inesl
 */
class AdminVoyageController extends AbstractController {
    
    /**
     * @Route ("/admin", name="admin,voyages")
     * @return Response
     */
    public function index() : Response{
        $visites = $this->repository->findAllOrderBy('datecreation', 'DESC');
        return $this->render("admin/admin.voyages.html.twig", [
            'visites' => $visites
        ]);
    }
    
    /**
    * 
    * @var VisiteRepository
    */
    private $repository;
    
    /**
    * 
    * @param VisiteRepository $repository
    */
    public function __construct(VisiteRepository $repository) {
        $this->repository = $repository;
    }
    
    /**
     * @Route("/admin/supp/{id}", name="admin.voyage.suppr")
     * @param Visite $visite
     * @return Response
     */
    public function suppr(Visite $visite): Response{
        $this->repository->remove($visite, true);
        return $this->redirectToRoute('admin.voyages');
    }
}
