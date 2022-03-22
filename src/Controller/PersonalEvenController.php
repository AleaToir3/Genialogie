<?php

namespace App\Controller;

use App\Entity\PersonalEven;
use App\Form\PersonalEvenType;
use App\Repository\PersonalEvenRepository;

use App\Repository\HistoryEvenRepository;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/personal/even")
 */
class PersonalEvenController extends AbstractController
{
    /**
     * @Route("/new", name="app_personal_even_new", methods={"GET", "POST"})
     */
    public function new(Request $request, PersonalEvenRepository $personalEvenRepository): Response
    {
        $personalEven = new PersonalEven();
        $form = $this->createForm(PersonalEvenType::class, $personalEven);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $personalEvenRepository->add($personalEven);
            return $this->redirectToRoute('Home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('personal_even/new.html.twig', [
            'personal_even' => $personalEven,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_personal_even_show", methods={"GET"})
     */
    public function show(PersonalEven $personalEven): Response
    {
        return $this->render('personal_even/show.html.twig', [
            'personal_even' => $personalEven,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_personal_even_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PersonalEven $personalEven, PersonalEvenRepository $personalEvenRepository): Response
    {
        $form = $this->createForm(PersonalEvenType::class, $personalEven);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $personalEvenRepository->add($personalEven);
            return $this->redirectToRoute('Home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('personal_even/edit.html.twig', [
            'personal_even' => $personalEven,
            'form' => $form, 
        ]);
    }

    /**
     * @Route("/{id}", name="app_personal_even_delete", methods={"POST"})
     */
    public function delete(Request $request, PersonalEven $personalEven, PersonalEvenRepository $personalEvenRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$personalEven->getId(), $request->request->get('_token'))) {
            $personalEvenRepository->remove($personalEven);
        }

        return $this->redirectToRoute('Home', [], Response::HTTP_SEE_OTHER);
    }
}

