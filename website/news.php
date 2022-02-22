<?php 

                //your variables that you are assigning
                    $param1 = 'one';
                    $param2 = "two";
                //This is where you pass the variables into Python 
                    $command = escapeshellcmd("/python/echo.py $param1 $param2");
                //assign the execution to a variable
                    $resultAsString = shell_exec($command);
                    echo $resultAsString;
            ?>