<?php
    class Initiate{
        public function start()
        {
            header('location:public/index.html');
        }
    }
    
    $website = new Initiate();
    $website->start();
?>