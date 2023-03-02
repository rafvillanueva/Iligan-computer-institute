          <?php 
                $marq = date("l");
                if($marq == "Monday"){
                    $msg = "I'ts ". $marq ."! The Beginning of the 1st day of the week. have a nice day.";
                }elseif($marq == "Wednesday"){
                    $msg = 'Do you know you can send announcement via SMS using this application ? <a href="#" style="color: red">CLICK HERE</a>.'; 
                }elseif($marq == "Tuesday"){
                    $msg = 'Account not yet active <a href="user-account" style="color: red">HERE</a>. just using ID Numbers.'; 
                }elseif($marq == "Thursday"){
                    $msg = 'Weather Update ? No problem. Notice everyone <a href="#" style="color: red">HERE</a>'; 
                }elseif($marq == "Friday"){
                    $msg = 'Site Change ? <a href="#" style="color: red">Site Configuration</a>'; 
                }else{
                    $msg = "Weekend already, You are such a hardworking.";
                }
          ?> 