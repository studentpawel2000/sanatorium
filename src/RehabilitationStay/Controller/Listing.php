<?php

namespace App\RehabilitationStay\Controller;

use App\RehabilitationStay\Repository\RehabilitationStayRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Listing
{
    public function __construct(
        private readonly Environment $twig,
        private readonly RehabilitationStayRepository $repository,
        private readonly PaginatorInterface $paginator,
    ) {
    }

    public function __invoke(Request $request): Response
    {
        $rehabilitationStays = $this->repository->findAll();
        $pagination = $this->paginator->paginate(
            $rehabilitationStays,
            $request->query->getInt('page', 1),
            10
        );
        return new Response($this->twig->render('RehabilitationStay/listing.twig', [
            'pagination' => $pagination,
        ]));
    }
}
