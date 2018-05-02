<?php
    class Gtalk implements Observer{
        public function message(){
            echo "Message From Google talk.<br/>";
        }
    }
?>