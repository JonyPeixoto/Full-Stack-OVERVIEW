<?php
    class Cache 
    {
        public function readCache(){
            if(file_exists('cache')){
                $data = json_decode(file_get_contents('cache'));
                if($data->clock < time()){
                    //Time to create the cache!
                    echo 'Creating new cache</hr>';
                    $data  = json_encode(['clock'=>time()+5,'content'=>'<h2>Our website is under maintenance!</h2>']);
                    file_put_contents('cache', $data);
                    $data = json_decode($data);
                }
            }else{
                echo 'Creating cache for the first time!<hr/>';
                $data  = json_encode(['clock'=>time()+5,'content'=>'<h2>Our website is under maintenance!</h2>']);
                file_put_contents('cache', $data);
                $data = json_decode($data);
            }

            return $data;

        }

    }
    

?>