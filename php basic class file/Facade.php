<?php
    class Facade{
        public function finderApartments($place, $divId){
            $apfinder = new ApartmentFinder();
            $geoloactor = new GeoLocator();
            $gmap = new GoogleMap();
            
            
            $apertments = $apfinder->locateApartments($place);
            foreach ($apfinder as $apertment){
                $locations[] = $geoloactor->getLocations($apertment);
            }
            $gampmap->initialize();
            $gmap->drawLocaton9($location);
            $gamp->dispatch($divId);
            
       
            
            
            }
        }
?>




































