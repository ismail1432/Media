<?php
/**
 * Created by PhpStorm.
 * User: Eniams
 * Date: 18/10/16
 * Time: 15:48
 */

namespace EniamsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Eniams\MediaBundle\Entity\Article;

class LoadArticleData implements FixtureInterface
{

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $article1 = new Article();
        $article1->setTitle('Edf va fermer des centrales');
        $article1->setContent('Le groupe va annoncer ce mardi après-midi la mise à l\'arrêt de ces réacteurs à la demande de l\'Autorité de sûreté nucléaire (ASN), afin de faire la révision des cuves après les malfaçons constatées chez Areva. ');
        $manager->persist($article1);

        $article0 = new Article();
        $article0->setTitle('Silva va quitter le psg');
        $article0->setContent('Un an après le départ de Zlatan Ibrahimovic, le prochain mercato estival du PSG promet d’être animé. Et pas seulement parce que le club de la capitale pourrait se remettre en quête du successeur du géant suédois, les dirigeants parisiens n’ayant pas renoncé à attirer Neymar malgré les 220 millions d’euros dont il faudra désormais s’acquitter pour arracher le Brésilien au Barça.');
        $manager->persist($article0);


        $article2 = new Article();
        $article2->setTitle('Chomage');
        $article2->setContent('En France métropolitaine, le nombre de chômeurs diminue de 74 000, à 2,8 millions de personnes ; le taux de chômage diminue ainsi de 0,3 point par rapport au premier trimestre 2016, à 9,6 % de la population active. La baisse concerne toutes les tranches d\'âge, particulièrement les jeunes. ')
        ;
        $manager->persist($article2);

        $article3 = new Article();
        $article3->setTitle('Emploi');
        $article3->setContent('En tant qu’Ingénieur de Développement PHP5 Symfony vous : Intervenez sur la refonte de site web Développez et testez les bases de conception technique Appréhendez les compétences fonctionnelles du domaine métier client Vos compétences: Vous maîtrisez PHP...');
        ;
        $manager->persist($article3);

        $article4 = new Article();
        $article4->setTitle('Faits divers');
        $article4->setContent('Dans son ordonnance, le tribunal saisi jeudi soir en référé-liberté estime ainsi que «le principe même du démantèlement du site de la lande de Calais ne méconnaît pas le principe de prohibition des traitements inhumains et dégradants. Au contraire, il vise, notamment, à faire cesser de tels traitements».');
        ;
        $manager->persist($article4);

        $manager->flush();



    }
}