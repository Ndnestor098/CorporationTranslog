<?php
    if(isset($_POST['enviar'])){
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['empresa']) 
        && !empty($_POST['telefono']) && !empty($_POST['message']) ){
            
            $data = [
                "name"=>$_POST['name'],
                "email"=>$_POST['email'],
                "company"=>$_POST['empresa'],
                "phone"=>$_POST['telefono'],
                "msg"=>$_POST['message']
            ];

            $header = "Form: trabajo.nestor.098@gmail.com"."\r\n";
            $header.="Reply-to: trabajo.nestor.098@gmail.com"."\r\n";
            $header.="X-Mailer: PHP/".phpversion();
            
            $mail = @mail($data["email"],$data["name"],$data["msg"],$header);

            if($mail){
                echo "Enviado correctamente";
            }
        }
    }
    
    


?>