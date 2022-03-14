<?php

namespace App\Controller;

use App\Entity\HistoryEven;
use App\Form\HistoryEvenType;
use App\Repository\HistoryEvenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/history/even")
 */
class HistoryEvenController extends AbstractController
{
    /**
     * @Route("/new", name="app_history_even_new", methods={"GET", "POST"})
     */
    public function new(Request $request, HistoryEvenRepository $historyEvenRepository): Response
    {
        $historyEven = new HistoryEven();
        $form = $this->createForm(HistoryEvenType::class, $historyEven);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $historyEvenRepository->add($historyEven);
            return $this->redirectToRoute('Home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('history_even/new.html.twig', [
            'history_even' => $historyEven,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_history_even_show", methods={"GET"})
     */
    public function show(HistoryEven $historyEven): Response
    {
        
        return $this->render('history_even/show.html.twig', [
            'history_even' => $historyEven,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_history_even_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, HistoryEven $historyEven, HistoryEvenRepository $historyEvenRepository): Response
    {
        $form = $this->createForm(HistoryEvenType::class, $historyEven);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $historyEvenRepository->add($historyEven);
            return $this->redirectToRoute('Home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('history_even/edit.html.twig', [
            'history_even' => $historyEven,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_history_even_delete", methods={"POST"})
     */
    public function delete(Request $request, HistoryEven $historyEven, HistoryEvenRepository $historyEvenRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$historyEven->getId(), $request->request->get('_token'))) {
            $historyEvenRepository->remove($historyEven);
        }

        return $this->redirectToRoute('Home', [], Response::HTTP_SEE_OTHER);
    }
}
