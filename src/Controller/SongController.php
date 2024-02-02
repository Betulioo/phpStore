<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
//regular expresion for adigit of any length
{#[Route('/api/song/{id<\d+>}',  methods: ['GET'])]
public function getSong(int $id, LoggerInterface $logger): Response
{
    $song = [
        'id' => $id,
        'name' => 'Waterfalls',
        'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
    ];

    $logger->info('Returning API response for song {song}', [
        'song' => $id,
    ]);
// this return is a shortcut
//    return $this->json($song);

    return new JsonResponse($song);
}
}