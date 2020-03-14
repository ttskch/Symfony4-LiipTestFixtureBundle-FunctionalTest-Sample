<?php
declare(strict_types=1);

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="user_")
 */
class UserController
{
    /**
     * @Route("/{id}/show", name="show")
     */
    public function show(int $id, EntityManagerInterface $em)
    {
        if (! $user = $em->find(User::class, $id)) {
            throw new NotFoundHttpException();
        }

        return new Response("Name: {$user->name}");
    }
}
