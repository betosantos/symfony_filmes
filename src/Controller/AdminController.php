<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categoria;
use Knp\Component\Pager\PaginatorInterface;
use App\Form\CategoriaType;
use App\Repository\CategoriaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\UserRepository;
use App\Entity\User;

class AdminController extends AbstractController
{

    // #[Route('/admin', name: 'admin')]
    // public function index(EntityManagerInterface $entityManager, Request $request): Response
    // {
    //     $user = $entityManager->getRepository(User::class)->findAll();        
    //     return $this->render('admin/adminbase.html.twig', [
    //         'user' => $user,
    //     ]);
    // }


    // #[Route('/admin/categorias', name: 'admin_categorias')]
    // public function admincategorias(EntityManagerInterface $entityManager, Request $request, PaginatorInterface $paginator): Response
    // {
    //     $categorias = $entityManager->getRepository(Categoria::class)->findAll();
                
    //     // Use o Paginator para criar uma paginação
    //     $pagination = $paginator->paginate(
    //         $categorias, // Array ou Query
    //         $request->query->getInt('page', 1), // Página atual
    //         3 // Quantidade de itens por página
    //     );

    //     return $this->render('categorias/index.html.twig', [
    //         'pagination' => $pagination,
    //     ]);
    // }



    // #[Route('categorias/{id}/edit', name: 'categorias_edit', methods: ['GET', 'POST'])]
    // public function edit(Request $request, Categoria $categorium, EntityManagerInterface $entityManager): Response
    // {
    //     $form = $this->createForm(CategoriaType::class, $categorium);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $entityManager->flush();

    //         return $this->redirectToRoute('app_categorias_index', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->render('categorias/edit.html.twig', [
    //         'categorium' => $categorium,
    //         'form' => $form,
    //     ]);
    // }




}
