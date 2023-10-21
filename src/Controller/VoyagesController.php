<?php



namespace App\Controller;

use App\Repository\VisiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of VoyagesController
 *
 * @author inesl
 */
class VoyagesController extends AbstractController {
    
    /**
     * @Route ("/voyages", name="voyages")
     * @return Response
     */
    public function index() : Response{
        $visites = $this->repository->findAllOrderBy('datecreation', 'DESC');
        return $this->render("pages/voyages.html.twig", [
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
     * @Route("/voyages/tri/{champ}/{ordre}", name="voyages.sort")
     * @param type $champ
     * @param type $ordre
     * @return Response
     */
    public function sort($champ, $ordre): Response{
        $visites = $this->repository->findAllOrderBy($champ, $ordre);
        return $this->render("pages/voyages.html.twig", [
            'visites' => $visites
        ]);
    }
    
    /**
     * @Route("/voyages/tri/{champ}/{ordre}", name="pays.sort")
     * @param type $champ
     * @param type $ordre
     * @return Response
     */
    public function sort2($champ, $ordre): Response{
        $visites = $this->repository->findAllOrderBy($champ, $ordre);
        return $this->render("pages/voyages.html.twig", [
            'visites' => $visites
        ]);
    }
    
    /**
     * @Route("/voyages/tri/{champ}/{ordre}", name="note.sort")
     * @param type $champ
     * @param type $ordre
     * @return Response
     */
    public function sort3($champ, $ordre): Response{
        $visites = $this->repository->findAllOrderBy($champ, $ordre);
        return $this->render("pages/voyages.html.twig", [
            'visites' => $visites
        ]);
    }
    
    /**
     * @Route("/voyages/tri/{champ}/{ordre}", name="date.sort")
     * @param type $champ
     * @param type $ordre
     * @return Response
     */
    public function sort4($champ, $ordre): Response{
        $visites = $this->repository->findAllOrderBy($champ, $ordre);
        return $this->render("pages/voyages.html.twig", [
            'visites' => $visites
        ]);
    }
}