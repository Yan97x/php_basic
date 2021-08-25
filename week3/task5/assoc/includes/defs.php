<?php
/* Functions for PM database example. */

/* Load sample data, an array of associative arrays. */
include "pms.php";

/* Search sample data for $name or $year or $state from form. */
function search($name, $year, $state) {
    global $pms; 

	if (empty($name) && 
		empty($year) && 
		empty($state)) {
		$pms = "nonedata";
	}

    // Filter $pms by $name
    if (!empty($name)) {
		$results = array();
		foreach ($pms as $pm) {
			if (stripos($pm['name'], $name) !== FALSE) {
				$results[] = $pm;
			}
		}
		$pms = $results;
    }

    // Filter $pms by $year
    if (!empty($year)) {
		$results = array();
		
		if (strval($year) !== strval(intval($year)) && 
			empty($state) && 
			empty($name)){
			$pms = "year is not number";
		}
		else {
			foreach ($pms as $pm) {
				if (strpos($pm['from'], $year) !== FALSE || 
					strpos($pm['to'], $year) !== FALSE) {
					$results[] = $pm;
				}
			}
			$pms = $results;
		}
			
    }

    // Filter $pms by $state
    if (!empty($state)) {
		$results = array();
		foreach ($pms as $pm) {
			if (stripos($pm['state'], $state) !== FALSE) {
				$results[] = $pm;
			}
		}
		$pms = $results;
	}

    return $pms;
}
?>
