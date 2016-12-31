<?php

namespace UR\AmburgerBundle\Util\Search;

class OnlyPersonDataSearcher extends BaseDataSearcher {
    
    //handle it only with lastname, firstname, patronym
    public function search($queryString, $onlyMainPersons, $lastName, $firstName, $patronym, $location, $territory, $country, $date, $fromDate, $toDate){
        return $this->checkAllPersonsByNames($onlyMainPersons, $lastName, $firstName, $patronym);
    }

    public function isApplicable($queryString, $onlyMainPersons, $lastName, $firstName, $patronym, $location, $territory, $country, $date, $fromDate, $toDate){  
        return !$this->geographicalMarkersAreSet($location, $territory, $country) 
                && !$this->dateMarkersAreSet($date, $fromDate, $toDate) 
                && empty($queryString);
    }
    
}

