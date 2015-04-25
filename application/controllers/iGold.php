<?php
    interface iGold{
        function getGold();
    }

    function getGoldMaker($name){
       if ($name == "farm") {
           return new Farm();
       }
       if ($name == "house") {
           return new House();
       }  
       if ($name == "cave") {
           return new Cave();
       }
       if ($name == "casino") {
           return new Casino();
       }

    }

    class Farm implements iGold{
        public function getGold(){
            $rNum = rand(10,20);
            $cdate = date('l jS \of F Y h:i:s A');
            $message = "Earned $rNum gold coins from the farm on $cdate";
            return array( 'gold' => $rNum, 'message' => $message);
        }
    }

    class House implements iGold{
        public function getGold(){
            $rNum = rand(2,5);
            $cdate = date('l jS \of F Y h:i:s A');
            $message = "Earned $rNum gold coins from the house on $cdate";
            return array( 'gold' => $rNum, 'message' => $message);
        }
    }

    class Cave implements iGold{
        public function getGold(){
            $rNum = rand(5,10);
            $cdate = date('l jS \of F Y h:i:s A');
            $message = "Earned $rNum gold coins from the cave on $cdate";
            return array( 'gold' => $rNum, 'message' => $message);
        }
    }

    class Casino implements iGold{
        public function getGold(){
            $rNum = rand(-50,50);
            $cdate = date('l jS \of F Y h:i:s A');
            if ($rNum < 0) {
                $message = "Lost " . abs($rNum) . " gold coins to the casino on $cdate";
            }else{ 
                $message = "Earned $rNum gold coins from the casino on $cdate";
            }
            return array( 'gold' => $rNum, 'message' => $message);
        }
    }
?>
