<?php

namespace App\Acme;

use MongoDB\Client;

class Foo
{
    public function getName()
    {
//        $manager = new MongoDB\Driver\Manager("mongodb://mongo:27017/test");
//
//        $bulk = new MongoDB\Driver\BulkWrite();
//        $bulk->insert(['name' => 'John Doe']);
//
//        $writeConcern = new MongoDB\Driver\writeConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);
//        $result = $manager->executeBulkWrite('test.mycollection', $bulk);
//
//        var_dump($result);

        $client = new Client('mongodb://mongo:27017/test');
        $seedData = array(
            array(
                'decade' => '1970s',
                'artist' => 'Debby Boone',
                'song' => 'You Light Up My Life',
                'weeksAtOne' => 10
            ),
            array(
                'decade' => '1980s',
                'artist' => 'Olivia Newton-John',
                'song' => 'Physical',
                'weeksAtOne' => 10
            ),
            array(
                'decade' => '1990s',
                'artist' => 'Mariah Carey',
                'song' => 'One Sweet Day',
                'weeksAtOne' => 16
            ),
        );

        $songs = $client->db->songsA;
        $songs->insertMany($seedData);

        return 'Nginx PHP Mongo';
    }
}
