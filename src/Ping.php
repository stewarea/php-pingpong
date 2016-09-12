<?php

    class PingPong
    {
        function playPingPong($checknumber) {
            if ($checknumber % 15 == 0) {
                return "Ping Pong";
            } elseif ($checknumber % 5 == 0) {
                return "Pong";
            } elseif ($checknumber % 3 == 0) {
                return "Ping";
            } else {
                return $checknumber;
            }
        }
        function pingponggenerator($targetnumber)
       {
           $return_array = array();
           for ($i = 1; $i < $targetnumber + 1; $i++) {
               array_push($return_array, $this->playPingPong($i));
           }
           return $return_array;

        }
    }

 ?>
