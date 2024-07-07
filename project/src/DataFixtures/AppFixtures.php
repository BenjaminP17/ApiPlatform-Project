<?php

namespace App\DataFixtures;

use App\Entity\Artist;
use App\Entity\Album;
use App\Entity\Track;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $artist = new Artist();
            $artist->setName($faker->name());
            $manager->persist($artist);

            for ($j = 0; $j < 20; $j++) {
                $album = new Album();
                $album->setName($faker->sentence(3)); 
                $album->setReleaseDate($faker->dateTimeBetween('-30 years', 'now'));
                $album->setArtist($artist);
                $manager->persist($album);

                $numberOfTracks = random_int(10, 15); // Génère un nombre aléatoire de pistes entre 10 et 15
                for ($k = 0; $k < $numberOfTracks; $k++) {
                    $track = new Track();
                    $track->setTitle($faker->sentence(2));
                    $track->setAlbum($album);
                    $manager->persist($track);
                }
            }
        }

        $manager->flush();
    }
}
