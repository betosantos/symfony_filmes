<?php

namespace App\Controller;

use App\Entity\Categoria;
use App\Form\CategoriaType;
use App\Repository\CategoriaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver;


// #[Route('/categorias'), IsGranted("ROLE_USER")]
#[Route('/admin/categorias')]
class CategoriasController extends AbstractController
{
    #[Route('/', name: 'admin_categorias_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, Request $request, PaginatorInterface $paginator): Response
    {
        $user = $this->getUser();
        
        if ($user->isVerified() == 0 )
        {
            return new Response('Email não foi verificado, confirme seu email para continua');
        }

        $repository = $entityManager->getRepository(Categoria::class);
        $queryBuilder = $repository->createQueryBuilder('c');
        
        $query = $queryBuilder            
            ->orderBy('c.nome', 'ASC')
            ->getQuery();

        $categorias = $query->getResult();       
        
        // Use o Paginator para criar uma paginação
        $pagination = $paginator->paginate(
            $categorias, // Array ou Query
            $request->query->getInt('page', 1), // Página atual
            9 // Quantidade de itens por página
        );

        return $this->render('categorias/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }



    #[Route('/new', name: 'app_categorias_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categorium = new Categoria();
        $form = $this->createForm(CategoriaType::class, $categorium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($categorium);
            $entityManager->flush();

            return $this->redirectToRoute('admin_categorias_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categorias/new.html.twig', [
            'categorium' => $categorium,
            'form' => $form,
        ]);
    }



    #[Route('/{id}', name: 'app_categorias_show', methods: ['GET'])]
    public function show(Categoria $categorium): Response
    {
        return $this->render('categorias/show.html.twig', [
            'categorium' => $categorium,
        ]);
    }



    #[Route('/{id}/edit', name: 'app_categorias_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Categoria $categorium, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategoriaType::class, $categorium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('admin_categorias_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categorias/edit.html.twig', [
            'categorium' => $categorium,
            'form' => $form,
        ]);
    }



    // #[Route('/{id}', name: 'app_categorias_delete', methods: ['POST'])]
    // public function delete(Request $request, Categoria $categorium, EntityManagerInterface $entityManager): Response
    // {
    //     if ($this->isCsrfTokenValid('delete' . $categorium->getId(), $request->request->get('_token'))) {
    //         $entityManager->remove($categorium);
    //         $entityManager->flush();
    //     }

    //     return $this->redirectToRoute('app_categorias_index', [], Response::HTTP_SEE_OTHER);
    // }


    #[Route('/delete/{id}', name: 'app_categorias_delete', methods: ['POST'])]
    public function delete(int $id, Request $request, Categoria $categorium, EntityManagerInterface $entityManager): Response
    {        
        $categorium = $entityManager->getRepository(Categoria::class)->find($id);
        
        if($request->request->get('confirm')) {            
            $entityManager->remove($categorium);
            $entityManager->flush();

            return $this->redirectToRoute('admin_categorias_index', []);
        }
        return $this->redirectToRoute('admin_categorias_index');
    }


    #[Route('/confirm-delete/{id}', name: 'confirm_categorias_delete', methods: ['GET'])]
    public function deleteConfirmation($id, EntityManagerInterface $entityManager, Categoria $categorium)
    {
        // Recupere o registro que deseja excluir (substitua com sua lógica)
        $record = $entityManager->getRepository(Categoria::class)->find($id);

        return $this->render('filmes/delete_confirmation.html.twig', [
            'categorium' => $categorium,
        ]);
    }

}
