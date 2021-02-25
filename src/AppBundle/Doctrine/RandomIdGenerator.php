<?php

namespace AppBundle\Doctrine;
use Doctrine\ORM\Id\AbstractIdGenerator;

class RandomIdGenerator extends AbstractIdGenerator
{
    public function generate(\Doctrine\ORM\EntityManager $em, $entity)
    {
        $entity_name = $em->getClassMetadata(get_class($entity))->getName();

        // Id must be 6 digits length, so range is 100000 - 999999
        $min_value = 1000000000;
        $max_value = 9999999999;

        $max_attempts = $max_value - $min_value;
        $attempt = 0;

        while (true) {
            $id = mt_rand($min_value, $max_value);
            $item = $em->find($entity_name, $id);

            if (!$item) {
                return $id;
            }

            // Should we stop?
            $attempt++;
            if ($attempt > $max_attempts) {
                throw new \Exception('RandomIdGenerator worked hardly, but failed to generate unique ID :(');
            }  
        }

    }
}