<?php

namespace App\Controller\Admin;

use App\Entity\Admin\Category;
use App\Entity\Admin\Products;
use App\Form\Admin\ProductsType;
use App\Repository\Admin\CategoryRepository;
use App\Repository\Admin\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class ProductsController extends AbstractController
{
    /**
     * @Route("admin/products/", name="admin_products_index", methods="GET|POST")
     */
    public function index(ProductsRepository $productsRepository): Response
    {

        return $this->render('admin/products/index.html.twig', ['products' => $productsRepository->findAll()]);
    }

    /**
     * @Route("admin/products/new", name="admin_products_new", methods="GET|POST")
     */
    public function new(Request $request, CategoryRepository $categoryRepository): Response
    {
        $products = new Products();
        $form = $this->createForm(ProductsType::class, $products);
        $form->handleRequest($request);
        $catlist = $categoryRepository->findAll();





        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($products);
            $em->flush();

            return $this->redirectToRoute('admin_products_index');
        }

        return $this->render('admin/products/new.html.twig', [
            'products' => $products,
            'catlist' => $catlist,
            'form' => $form->createView(),

        ]);
    }

    /**
     * @Route("admin/products/{id}", name="admin_products_show", methods="GET|POST")
     */
    public function show(Products $products): Response
    {
        return $this->render('admin/products/show.html.twig', ['products' => $products]);
    }

    /**
     * @Route("admin/products/edit/{id}", name="admin_products_edit", methods="GET|POST")
     */
    public function edit(Request $request, Products $products, CategoryRepository $categoryRepository): Response
    {
        $catlist = $categoryRepository->findAll();


        $form = $this->createForm(ProductsType::class, $products);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_products_index', ['id' => $products->getId()]);
        }
        return $this->render('admin/products/edit.html.twig', [
            'products' => $products,
            'catlist' => $catlist,
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("admin/products/{id}", name="admin_products_delete", methods="DELETE")
     */
    public function delete(Request $request, Products $products): Response
    {
        if ($this->isCsrfTokenValid('delete'.$products->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($products);
            $em->flush();
        }

        return $this->redirectToRoute('admin_products_index');
    }
}
