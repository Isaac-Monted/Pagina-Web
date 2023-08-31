<?php
$name = $_POST['nombre'];
$phone = $_POST['telefono'];
$mail = $_POST['correo1'];
$affair = $_POST['Asunto'];
$message = $_POST['Proyecto'];

$header = 'From: ' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "email del Cliente: " . $mail . " \r\n";
$message .= "Telefono del cliente: " . $phone . " \r\n";
$message .= "Proyecto del cliente: " . $_POST['Proyecto'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'desinglass.ventanasinteligentes@gmail.com';
$asunto =  $affair 

mail($para, $asunto, utf8_decode($message), $header);

echo $name;

if(mail($para, $asunto, utf8_decode($message), $header)){
    echo "Tu cotizacion se ha enviado Correctamente"
}else{
    echo "Estamos teniendo problemas para procesar tu solicitud, intentelo mas tarde."
}

header("Location:index.html");
?>


<scripts>
        const $form = document.querySelector('#form')
        const $ButtonMailto = document.querySelector('#Puente')
        
        $form.addEventListener('submit', handleSubmit)
        
        function handleSubmit(event){
            event.preventDefault()
            const form = new FormData(this)
            
            <!-- console.log(form.get('name')) -->
            $ButonMailto.setAttribute('href',`mailto:desinglass.ventanasinteligentes@gmail.com?subject=nombre ${form.get('name')}correo ${form.get('email')}&body=${form.get('imput1')}`)
            $ButtonMailto.click()
            
        }
    </scripts>

    <script>
        const $form = document.querySelector('#form')
        
        $form.addEventListener('submit', handlesubmit)

       async function handlesubmit(event){
            event.preventDefault()
            const form = new FormData(this)
            const responce = await fetch(this.action, {
                method: this.method,
                body: form,
                headers: {
                    'accept':'application/json'
                }
            })
            if(responce.ok) {
                this.reset()
                alert('Tu cotizacion se ha enviado Correctamente')
            }else{
                alert('Estamos teniendo problemas para procesar tu solicitud, intentelo mas tarde.') 
            }
        }
    </script>