<?php

namespace App\Controller\Admin;

use App\Entity\Admin\Settings;
use App\Form\Admin\SettingsType;
use App\Repository\Admin\SettingsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/settings")
 */
class SettingsController extends AbstractController
{
    /**
     * @Route("/", name="admin_settings_index", methods="GET")
     */
    public function index(SettingsRepository $settingsRepository): Response
    {
        return $this->render('admin/settings/index.html.twig', ['settings' => $settingsRepository->findAll()]);
    }

    /**
     * @Route("/new", name="admin_settings_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $setting = new Settings();
        $form = $this->createForm(SettingsType::class, $setting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($setting);
            $em->flush();

            return $this->redirectToRoute('admin_settings_index');
        }

        return $this->render('admin/settings/new.html.twig', [
            'setting' => $setting,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_settings_show", methods="GET")
     */
    public function show(Settings $setting): Response
    {
        return $this->render('admin/settings/show.html.twig', ['setting' => $setting]);
    }

    /**
     * @Route("/{id}/edit", name="admin_settings_edit", methods="GET|POST")
     */
    public function edit(Request $request, Settings $setting): Response
    {
        $form = $this->createForm(SettingsType::class, $setting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success','Kayıt güncelleme başarılı');
            return $this->redirectToRoute('admin_settings_index', ['id' => $setting->getId()]);
        }

        return $this->render('admin/settings/edit.html.twig', [
            'setting' => $setting,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_settings_delete", methods="DELETE")
     */
    public function delete(Request $request, Settings $setting): Response
    {
        if ($this->isCsrfTokenValid('delete'.$setting->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($setting);
            $em->flush();
        }

        return $this->redirectToRoute('admin_settings_index');
    }
}
