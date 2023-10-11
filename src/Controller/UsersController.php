<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Entity\User;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/admin/usuarios')]
class UsersController extends AbstractController
{
    #[Route('/{id}', name: 'admin_users_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager, User $user): Response
    {
        
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
     
        return $this->render('users/form.html.twig', [            
            'user' => $user,
            'form' => $form,            
        ]);
    }



    #[Route('/', name: 'admin_users_index')]
    public function index(Request $request, EntityManagerInterface $entityManager, PaginatorInterface $paginator): Response
    {
        $repository = $entityManager->getRepository(User::class);
        $queryBuilder = $repository->createQueryBuilder('u');
        
        $query = $queryBuilder            
            ->orderBy('u.nome', 'ASC')
            ->getQuery();

        $users = $query->getResult();       
        
        // Use o Paginator para criar uma paginação
        $pagination = $paginator->paginate(
            $users, // Array ou Query
            $request->query->getInt('page', 1), // Página atual
            9 // Quantidade de itens por página
        );

        return $this->render('users/index.html.twig', [
            'pagination' => $pagination,
        ]);
        
    }

}
