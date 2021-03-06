<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * League page
 */
class League extends Application {
   
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Display the league page and iterate over the teams data set.
     */
    public function index()
    {
        $this->data['pagebody'] = 'league';
        $source = $this->teams->get_all_teams();
        $teams = array();
        foreach($source as $record) {
            $teams[] = array('id' => $record['id'], 'conf' => $record['conf'], 'div' => $record['div'], 'team' => $record['team']);
        }
        //asort($teams);
        $this->data['teams'] = $teams;
        $this->render();
    }
}
