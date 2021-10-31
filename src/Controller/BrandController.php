<?php

namespace App\Controller;

use App\Entity\Brand;
use Sylius\Component\Resource\Repository\RepositoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class BrandController 
{
    /** @var RepositoryInterface */
    private $brandRepository;

   /** @var Environment */
   private $twig;

    public function __construct(RepositoryInterface $brandRepository,
                                Environment $twig)
    {
        $this->brandRepository = $brandRepository;
        $this->twig = $twig;
    }


    public function __invoke(Request $request, $id): Response
    {
        $brand = $this->brandRepository->find($id);

        return new Response($this->twig->render('brand/index.html.twig', array("brand"=>$brand)));
    }
}

