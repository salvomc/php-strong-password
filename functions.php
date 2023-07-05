<?php
    
    function genRandomPassword() 
    {
        $charAndNum = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $password = [];
        $alphaLength = strlen($charAndNum) - 1; 
        for ($i = 0; $i < $_GET['password']; $i++) 
            {
            $n = rand(0, $alphaLength);
            $password[] = $charAndNum[$n];
            }
        return implode($password);
    }

?>