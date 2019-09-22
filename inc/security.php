<?php
    $dir="/prj/nbp/uyecincom/";
    
    function security($tp) {
        global $dir;
        /*if ($_SERVER['REQUEST_URI'] == $dir.$tp) {
            header('HTTP/1.0 403 Forbidden');
?><h1>403 - Access Forbidden!</h1>You can not access this folder...<?php   
        }*/
    }
    
    
/*
 * listeleme
        <p><?php
        
            $sql->connect();
            
            $gel = $sql->query('select * from test.table');
            
            while ($row = $gel->fetch_array()) {
                echo $row[0].' - '.$row[1].' - '.$row[2].'<br>';
            }
        
        ?></p>
 * 
 * 
 */