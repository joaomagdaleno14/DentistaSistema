<?php 
    include_once '../model/Consulta.php';
    include_once '../bl/ConsultaBl.php';
    include_once '../common/respostas.php';
    include_once '../PHPMailer_5.2.0/class.phpmailer.php';
    if (isset($_POST)){

        $Consulta = new Consulta();
        $Consulta->setData($_POST['Data']);        
        $Consulta->setPaciente_ID($_POST['Paciente_ID']);        
        $Consulta->setNomeDent($_POST['NomeDent']);        
        // $Consulta->setTratamento($_POST['Tratamento']);        
        // $Consulta->setSituacao($_POST['Situacao']);        
        $pBl = new ConsultaBl();
        $resultado = $pBl->registrarConsulta($Consulta);

        if ($resultado == SUCESSO){

            $mail = new PHPMailer(); // instancia a classe PHPMailer

            $mail->IsSMTP();

            //configuração do gmail
            $mail->Port = '465'; //porta usada pelo gmail.
            $mail->Host = 'smtp.gmail.com'; 
            $mail->IsHTML(true); 
            $mail->Mailer = 'smtp'; 
            $mail->SMTPSecure = 'ssl';

            //configuração do usuário do gmail
            $mail->SMTPAuth = true; 
            $mail->Username = 'joaomagdaleno.14@gmail.com'; // usuario gmail.   
            $mail->Password = 'wunsaM-xakby4-hirfun'; // senha do email.

            $mail->SingleTo = true; 

            // configuração do email a ver enviado.
            $mail->From = "Mensagem de email, pode vim por uma variavel."; 
            $mail->FromName = "Nome do remetente."; 

            $mail->addAddress("luh.vieiraa@gmail.com"); // email do destinatario.

            $mail->Subject = "Aqui vai o assunto do email, pode vim atraves de variavel."; 
            $mail->Body = "Aqui vai a mensagem, que tambem pode vim por variavel.";

            if(!$mail->Send())
                echo "Erro ao enviar Email:" . $mail->ErrorInfo;

            if(!$mail->send()) 
            {
                echo "Erro ao enviar o email Error: " . $mail->ErrorInfo;
            } 
            else 
            {
                echo "Email enviado com sucesso";
            }

            echo "ok inserido com sucesso";
        } else {
            echo "nao foi inserido";    
        }
        
        
    }?>