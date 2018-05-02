<?php
    
    class Person{
        
        public $Name = "Rony";
        public $Age = "30";
        
        public $Skill = "Programming";
        
        private $Email = "rony@gmail.com";
        protected $Password = "123456";
        
        
        
         function iteratorInner(){
            echo "Inside Class<br/>";
    foreach($this as $key => $value){
    echo "<pre>";
        echo "$key=>$value";
    echo "</pre>";
}
        }
    }



?>