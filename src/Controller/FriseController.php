<?php

namespace App\Controller;

use App\Repository\HistoryEvenRepository;
use App\Repository\PersonalEvenRepository;
use DateTime;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FriseController extends AbstractController
{
    /**
     * @Route("/", name="Home")
     */
    public function index(PersonalEvenRepository $personalEvenRepository,HistoryEvenRepository $historyEvenRepository): Response
    {
        // recupere les events +trie ASC
        $eventP = $personalEvenRepository->findBy([], ['date' => 'ASC']);
        $eventDate = [];
        $d = '';
        $i = -1;
        $j = 0;
        foreach($eventP as $value){
            if($value->getDate()->format('Y') == $d){
                $j++;
                $eventDate[$i]['eventP'][$j] = $value;
            }
            else{
                $j = 0;
                $i++;
                $eventDate[$i]['date'] = $value->getDate()->format('Y');
                $eventDate[$i]['eventP'][$j] = $value;
                $d = $value->getDate()->format('Y');
                // $dateMin = $value->getDate();
                // $dateMax = $value->getDate();            
                // $dateMax = $dateMax->format('Y-m-d');
                // $dateMax = new DateTime($dateMax);
                // $dateMax = $dateMax->modify('+1 month');

                $eventDate[$i]['evenH'] = $historyEvenRepository->findByDate($value->getDate());
            }
        }
        // dd($eventDate);
        return $this->render('frise/index.html.twig', [
            // 'personal_evens' => $personalEvenRepository->findAll(),
            // 'history_evens' => $historyEvenRepository->orderByDate('date'),
            'evens' => $eventDate
        ]);
    }
}
