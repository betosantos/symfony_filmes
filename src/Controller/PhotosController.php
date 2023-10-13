<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Photos;
use App\Entity\Filme;
use App\Form\PhotosType;
use App\Form\FilmeType;
use Doctrine\ORM\EntityManagerInterface;

class PhotosController extends AbstractController
{
    #[Route('/photos/{id}', name: 'photos', methods: ['GET', 'POST'])]
    public function index(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {       
        $photos = new Photos();
        $form = $this->createForm(PhotosType::class, $photos);
        $form->handleRequest($request);  
                        
        if ($form->isSubmitted() && $form->isValid()) {
            if($foto = $form['foto']->getData())
            {              
              $fotoDir = $this->getParameter('kernel.project_dir').'/public/uploads/photos';
              $filename = uniqid().'.'.$foto->guessExtension();
              $foto->move($fotoDir, $filename);
              $photos->setFoto($filename);                          
            }     

            
            $entityManager->persist($photos);
            $entityManager->flush();
      
            return $this->redirectToRoute('admin_filmes', []);
          }

        return $this->render('photos/_form.html.twig', [
            'form' => $form
        ]);
    }
}
