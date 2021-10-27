<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Task;
use Doctrine\DBAL\Driver\Connection;
use Doctrine\DBAL\DriverManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TaskController extends AbstractController
{
    public function index(EntityManagerInterface $em){

      //////Insert with php $servername = "localhost";
        // $username = "asterisk";
        // $password = "root2021";
        // $dbname = "asterisk";

        // // Create connection
        // $conn = new mysqli($servername, $username, $password, $dbname);
        // // Check connection
        // if ($conn->connect_error) {
        // die("Connection failed: " . $conn->connect_error);
        // }

        // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        // VALUES ('John', 'Doe', 'john@example.com')";

        // if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
        // } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
        // }

        // $sql = "INSERT INTO users (users, password) VALUES ('John', 'Doe', 'john@example.com')";

        // if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
        // } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
        // }

        // $conn->close();
            



      
      
      
      
      
      
      
      
        // $tasks =[
        //     [
        //         "id"=>1,
        //         "title"=>"بسم الله",
        //         "descreption"=>"شكرا يا عليم"
        //     ],
        //     [
        //         "id"=>2,
        //         "title"=>"بسم الله",
        //         "descreption"=>"شكرا يا عليم"
        //     ],
        //     [
        //         "id"=>3,
        //         "title"=>"بسم الله",
        //         "descreption"=>"شكرا يا عليم"
        //     ]];

        // $sayHello='hello using parametre';



        // $connectionParams = array(
        //     'dbname' => 'users',
        //     'user' => 'root',
        //     'password' => '',
        //     'host' => 'localhost',
        //     'driver' => 'pdo_mysql',
        // );
        // $conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);
        

        $connectionParams = array(
            'url' => 'mysql://root:@127.0.0.1:3306/asterisk',
        );
          $conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);


        //$conn = DriverManager::getConnection(array($connectionParams));
         
          $queryBuilder = $conn->createQueryBuilder();
  
          $queryBuilder
              ->insert('users')
              ->values(
                  array(
                      'name' => '?',
                      'password' => '?'
                  )
              )
              ->setParameter(0, "mohamed")
              ->setParameter(1, "rootPass");

            //   $query = $queryBuilder->getQueryPart();
            //   $query->execute();
             
  //INSERT INTO users (name, password) VALUES (?, ?)
  // dd($conn);

        $repo=$em->getRepository(Task::class);
        //$task
        
       // $task = new Task;
        $repo->findByExampleField();



        
        return $this->render('home.html.twig'); 
    }

    public function number(): Response
    {
        $number = random_int(0,100);

        return new Response('hello'); 
    }

    /**
     * @Route("/create/task")
     */
    public function createTask(): Response
    {
        // $number = random_int(0,100);

        return new Response('hello from create task'); 
    }
}

