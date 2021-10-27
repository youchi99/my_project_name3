<?php

namespace App\DataFixtures;

use App\Entity\Task;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TaskFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        // for($i=1;$i<=10;$i++)
        // {
        //     $task = new Task();
        //     $task->setTitle("Task title :") . $i;
        //     $task->setTitle("Task body") . $i;
        //     $manager->persist($task);
        // }

        // $manager->flush();
    }
}
