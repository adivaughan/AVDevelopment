<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LocationController  extends Controller
{
  /**
  *@Route("/location/{locationName}")
  */
  public function showaction($locationName)
{
  $notes = [
            'Classes start at 12pm',
            'Maximum 12 people person class',
            'This class comes recommended'
      ];

      return $this->render('location/show.html.twig', [
          'name' => $locationName,
          'notes' => $notes
      ]);

  }

}
