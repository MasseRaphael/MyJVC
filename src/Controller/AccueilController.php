<?

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index()
    {
        return $this->render('accueil/index.html.twig',
        [
            'title_articles' => [
                'Titre_1',
                'Titre_2',
                'Titre_3',
                'Titre_4',
                'Titre_5',
                'Titre_6',
            ],
            'images' => [
                'src/images/1.jpg',
                'src/images/2.jpg',
                'src/images/3.jpg',
                'src/images/4.jpg',
                'src/images/5.jpg',
                'src/images/6.jpg',
            ]
        ])
    }

}