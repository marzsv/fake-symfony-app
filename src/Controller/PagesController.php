<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return new Response('Hooola');
    }

    /**
     * @Route("/health-check", name="health-check")
     */
    public function health()
    {
        return new Response("I'm OK :) thanks for asking.");
    }
}
