<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class homeController extends AbstractController
{
    #[Route('/')]
public  function homepage(): Response
{
    $tracks = [
        ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
        ['song' => 'Waterfalls', 'artist' => 'TLC'],
        ['song' => 'Creep', 'artist' => 'Radiohead'],
        ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
        ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
        ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
    ];

    return $this->render('home/homepage.html.twig', ['title'=> 'PB & Jams', 'tracks'=>$tracks]);
}
#[Route('/items/{slug}')]
public function items(string $slug=null){



        if($slug){
            $title = u(str_replace('-', ' ', $slug))->title(true);

        }else {
            $title = 'something else';
        }
        return new Response("<h1>Items $title</h1>");
}
}