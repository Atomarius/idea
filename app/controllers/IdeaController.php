<?php

use DomainModel\Idea\Idea;
use Phalcon\Db\Adapter\Pdo\Sqlite;

class IdeaController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function rateAction()
    {
        // Getting parameters from the request
        $ideaId = $this->request->get('id');
        $rating = $this->request->get('rating');
        // Building database connection
        $db = new Sqlite(array('dbname' => '/tmp/idea.sqlite'));
        // Finding the idea in the database
        $sqlStatement = 'SELECT * FROM idea WHERE id = ?';
        $row = $db->query($sqlStatement, array($ideaId))->fetch();
        if (!$row) {
            throw new \Exception('Idea does not exist');
        }
        // Building the idea from the database
        $idea = new Idea();
        $idea->setId($row['id']);
        $idea->setTitle($row['title']);
        $idea->setDescription($row['description']);
        $idea->setRating($row['rating']);
        $idea->setVotes($row['votes']);
        $idea->setAuthor($row['author']);
        // Add user rating
        $idea->addRating($rating);
        // Update the idea and save it to the database
        $fields = array('votes', 'rating');
        $values = array($idea->getVotes(), $idea->getRating());
        $where = array('conditions' => 'id = ?', 'bind' => array($ideaId));
        $db->update('idea', $fields, $values, $where);
        // Redirect to view idea page
        $this->dispatcher->forward(array('controller' => 'idea', 'action' => 'index', 'params' => array('id' => $ideaId)));
    }

}

