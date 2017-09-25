<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Models\Company;

class DefaultController extends Controller
{
    // /**
    //  * @Route("/", name="homepage")
    //  */
    // public function indexAction(Request $request)
    // {
    //     // replace this example code with whatever you need
    //     return $this->render('default/index.html.twig', [
    //         'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
    //     ]);
    // }

    /**
     * @Route("/", name="homepage")
     */
    public function showHomepage(Request $request, Company $Company)
    {
        $company = $Company->getCompanies(5);
        return $this->render('default/index.html.twig', [
            'companies' => $company,
        ]);
    }
}
