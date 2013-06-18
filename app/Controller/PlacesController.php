<?php
App::uses('AppController', 'Controller');
/**
 * Places Controller
 *
 * @property Place $Place
 */
class PlacesController extends AppController {
    public $scaffold;

    public function current(){
        $user_id = 1;

        $trip = $this->Place->ToTrip->find('first', array(
            'conditions' => array('ToTrip.user_id' => $user_id),
            'contain'    => array('FromPlace', 'ToPlace')
        ));

        //$this->Place->recover();

        if($trip['ToTrip']['ended'] > date('Y-m-d H:i:s')){
            debug($trip['FromPlace']);
            debug($this->Place->getPath($trip['FromPlace']['id']));
            debug($trip['ToPlace']);
            debug($this->Place->getPath($trip['ToPlace']['id']));
        }else{
            debug($trip['ToPlace']);
            debug($this->Place->getPath($trip['ToPlace']['id']));
        }

        die();

    }

    public function export(){
    	$this->Place->recursive = -1;
    	$places = $this->Place->find('threaded');
    	$paths = $this->Place->FromPath->find('all');
    	
    	App::uses('File', 'Utility');
    	$file = new File('places.gv', true, 0644);
    	$file->write("");
    	$file->append("digraph {\n");

		$file->append($this->_exportPlaces($places));
		$file->append("\n\n");

    	foreach ($paths as $path) {
    		$file->append("\tPLACE_".$path['FromPlace']['id']." -> PLACE_".$path['ToPlace']['id']." [ label = \"".$path['FromPath']['description']."\" ];\n");
    	}
    	$file->append("}\n");

    	die();

    }

    protected function _exportPlaces($places = array(), $level = 1){
    	if(empty($places)) return "";

    	$prefix = str_repeat("\t", $level);
    	$txt = "";
    	foreach ($places as $place) {
    		if(!empty($place['children'])){
    			$txt.= $prefix."subgraph cluster_".$place['Place']['id']."{\n";
    			$txt.= $prefix."\tlabel = \"".$place['Place']['name']."\";\n";
    			$txt.= $this->_exportPlaces($place['children'], $level+1);
    			$txt.= $prefix."}\n";
    		} else {
    			$txt.= $prefix."PLACE_".$place['Place']['id']." [ label = \"".$place['Place']['name']."\" ];\n";
    		}
    	}
    	return $txt;
    }
}
