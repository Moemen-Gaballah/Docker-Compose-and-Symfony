<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Dark Knight');
        $movie->setReleaseYear(2008);
        $movie->setDescription('This is the description of the Dark Knight');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2021/03/11/17/46/spider-man-6087809_640.jpg');

        // Add Data To Pivot Table
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Avengers: Endgame');
        $movie2->setReleaseYear(2019);
        $movie2->setDescription('This is the description of Avengers: Endgame');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2023/02/12/12/45/iron-man-7785032_640.jpg');

        // Add Data To Pivot Table
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_3'));

        $manager->persist($movie2);

        $manager->flush();
    }
}
