<?php
namespace App\Controller;

use App\Entity\Filme;
use App\Form\FilmeType;
use App\Repository\FilmeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/filmes')]
class FilmesController extends AbstractController
{
  #[Route('/', name: 'admin_filmes', methods: ['GET'])]
  public function index(FilmeRepository $filmeRepository, EntityManagerInterface $entityManager): Response
  {
    $repository = $entityManager->getRepository(Filme::class);
    $queryBuilder = $repository->createQueryBuilder('f');

    $query = $queryBuilder
            ->orderBy('f.titulo', 'ASC')
            ->getQuery();

    $filmes = $query->getResult();


    return $this->render('filmes/index.html.twig', [
      // 'filmes' => $filmeRepository->findAll()
      'filmes' => $filmes
    ]);
  }



  #[Route('/new', name: 'admin_filmes_new', methods: ['GET', 'POST'])]
  public function new(Request $request, EntityManagerInterface $entityManager): Response
  {
    $filme = new Filme();
    $form = $this->createForm(FilmeType::class, $filme);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      if($foto = $form['foto']->getData()) {
        $fotoDir = $this->getParameter('kernel.project_dir').'/public/uploads/filmes';
        $filename = uniqid().'.'.$foto->guessExtension();
        $foto->move($fotoDir, $filename);
        $filme->setFoto($filename);
      }

      $entityManager->persist($filme);
      $entityManager->flush();

      return $this->redirectToRoute('admin_filmes', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('filmes/new.html.twig', [
      'filme' => $filme,
      'form' => $form,
    ]);
  }



  #[Route('/{id}', name: 'app_filmes_show', methods: ['GET'])]
  public function show(Filme $filme): Response
  {
    return $this->render('filmes/show.html.twig', [
      'filme' => $filme,
    ]);
  }



  #[Route('/{id}/edit', name: 'app_filmes_edit', methods: ['GET', 'POST'])]
  public function edit(Request $request, Filme $filme, EntityManagerInterface $entityManager): Response
  {
    $form = $this->createForm(FilmeType::class, $filme);    
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      if($foto = $form['foto']->getData()) {
        $fotoDir = $this->getParameter('kernel.project_dir').'/public/uploads/filmes';
        $filename = uniqid().'.'.$foto->guessExtension();
        $foto->move($fotoDir, $filename);
        $filme->setFoto($filename);
      }      
      $entityManager->flush();

      return $this->redirectToRoute('admin_filmes', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('filmes/edit.html.twig', [
      'filme' => $filme,
      'form' => $form,
    ]);
  }

  // #[Route('/{id}', name: 'app_filmes_delete', methods: ['POST'])]
  // public function delete(Request $request, Filme $filme, EntityManagerInterface $entityManager): Response
  // {
  //   if ($this->isCsrfTokenValid('delete'.$filme->getId(), $request->request->get('_token'))) {
  //     $entityManager->remove($filme);
  //     $entityManager->flush();
  //   }

  //   return $this->redirectToRoute('admin_filmes', [], Response::HTTP_SEE_OTHER);
  // }


  #[Route('/delete/{id}', name: 'app_filmes_delete', methods: ['POST'])]
  public function delete(int $id, Request $request, Filme $filme, EntityManagerInterface $entityManager): Response
    {        
        $filme = $entityManager->getRepository(Filme::class)->find($id);
        // dd($filme);
                
        if($request->request->get('confirm')) {            
            $entityManager->remove($filme);
            $entityManager->flush();

            return $this->redirectToRoute('admin_filmes', []);
        }
        return $this->redirectToRoute('admin_filmes');
    }


    #[Route('/confirm-delete/{id}', name: 'confirm_filmes_delete', methods: ['GET'])]
    public function deleteConfirmation($id, EntityManagerInterface $entityManager, Filme $filme)
    {
        // Recupere o registro que deseja excluir (substitua com sua lógica)
        $record = $entityManager->getRepository(Filme::class)->find($id);

        return $this->render('filmes/delete_confirmation.html.twig', [
            'record' => $record,
        ]);
    }


}
