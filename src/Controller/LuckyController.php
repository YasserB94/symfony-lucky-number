<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController
{
    public function number(): Response
    {
        $number = random_int(0, 100);
        return $this->render('lucky/number.html.twig', ['number' => $number,]);
        // return new Response(
        //     '
        //     <html>
        //         <body>
        //             <p>Your lucky number is:' . $number . '</p>
        //         </body>
        //     </html>
        //     '
        // );
    }
}
