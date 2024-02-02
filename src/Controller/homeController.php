<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use function Symfony\Component\String\u;

class homeController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
public  function homepage(Environment $twig): Response
{
    $tracks = [
        ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
        ['song' => 'Waterfalls', 'artist' => 'TLC'],
        ['song' => 'Creep', 'artist' => 'Radiohead'],
        ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
        ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
        ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
    ];

//    $html = $twig->render('home/homepage.html.twig', ['title'=> 'PB & Jams', 'tracks'=>$tracks]);
  return $this->render('home/homepage.html.twig', ['title'=> 'PB & Jams', 'tracks'=>$tracks]);

//        return new Response($html);
}
#[Route('/browse/{slug}', name: 'app_browse')]
public function browse(string $slug=null){


        $genre = $slug ? u(str_replace('-', ' ', $slug))->title(true) : null;
        return $this->render('home/browse.html.twig', [
            'genre' => $genre,
            ]);
}
}