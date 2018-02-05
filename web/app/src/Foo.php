<?php

namespace App\Acme;

use MongoDB\Client;
use NfqQualityMeter\QualityGroup;

class Foo
{
    public function getItems()
    {
        $client = new Client('mongodb://mongo:27017/test');
//        $seedData = array(
//            array(
//                'decade' => '1970s',
//                'artist' => 'Debby Boone',
//                'song' => 'You Light Up My Life',
//                'weeksAtOne' => 10
//            ),
//            array(
//                'decade' => '1980s',
//                'artist' => 'Olivia Newton-John',
//                'song' => 'Physical',
//                'weeksAtOne' => 10
//            ),
//            array(
//                'decade' => '1990s',
//                'artist' => 'Mariah Carey',
//                'song' => 'One Sweet Day',
//                'weeksAtOne' => 16
//            ),
//        );

        $db = $client->selectDatabase('nfq_quality_meter');

        $qualityGroups = [];
        for ($i = 0; $i < 5; $i++) {
            $qualityGroups[] = new QualityGroup('foo' . $i, 'name' . random_int(1, 10), random_int(1, 30));
        }

        $collection = $db->selectCollection('quality_groups');
        $collection->insertMany($qualityGroups);


//        $collection->updateMany(
//            array('artist' => 'Mariah Carey'),
//            array('$set' => array('artist' => 'Mariah Carey ft. Boyz II Men'))
//        );

        $query = [];/*['weeksAtOne' => ['$gte' => 10]];*/
        $options = ['sort' => ['name' => 1]];

        $qualityGroups = $collection->find($query, $options);

//        $collection->drop();

        return $qualityGroups;
    }
}
