<?php

namespace App\Controller;

use App\Entity\Basilique;
use App\Repository\BasiliqueRepository;
use Core\Controller\Controller;
use Core\Http\Response;

class BasiliqueController extends Controller {

    public function index():Response
    {
        $basiliqueRepo = new BasiliqueRepository();
        $basiliques = $basiliqueRepo->findAll();


        return $this->render("basilique/index",[
          "basilique"=>$basiliques,
          "pageTitle"=>"Les Basiliques"

        ]);

    }

    public function show():Response{

        if (isset($_GET['id']) && ctype_digit($_GET['id'])){
            $id = $_GET['id'];
        }else{
            return $this->redirect();
        }


        $basiliqueRepo = new BasiliqueRepository();
        $basilique = $basiliqueRepo->find($id);

        return $this->render("basilique/show",[
            "basilique" => $basilique,
            "pageTitle"=>"Ma basilique"
        ]);

    }

    public function delete():Response{
        if (isset($_GET['id']) && ctype_digit($_GET['id'])){
            $id = $_GET['id'];
        }else{
            return $this->redirect();
        }
        $basiliqueRepo = new BasiliqueRepository();
        $basilique = $basiliqueRepo->delete($id);

        return $this->redirect("?type=basilique&action=index");


    }


    public function create():Response
    {
        $name =null;
        $description =null;
        $taille =null;

        if(!empty($_POST['name'])){$name = $_POST['name'];}
        if(!empty($_POST['description'])){$description = $_POST['description'];}
        if(!empty($_POST['taille'])){$taille = $_POST['taille'];}

        if($name && $description && $taille)
        {
            $basilique = new Basilique();
            $basilique->setName($name);
            $basilique->setDescription($description);
            $basilique->setTaille($taille);

            $basiliqueRepository = new BasiliqueRepository();

            $basiliqueRepository->save($basilique);

            return $this->redirect("?type=basilique&action=index");

        }



        return $this->render("basilique/create", [
            "pageTitle"=>"Ajouter Basilique"
        ]);
    }
}