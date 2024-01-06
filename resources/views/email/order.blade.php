<div style="margin: auto;text-align: center">
    <h1 style="margin: auto;">Pedido del Museo de la imaginación</h1>
<div style="text-align: left">
    <p>Estimado cliente,</p> <p>Este correo automático le confirma que hemos recibido su petición, la cual será atendida en un
plazo máximo de 24 horas.</p>
</div>
    <h2 style="padding-top: 30px;color: #2ab27b">Muchas gracias por su pedido</h2>
    <h3> Los datos del cliente:</h3>
</div>
<div style="margin-left: 30px">
    <p><b>Pedido № {{$data->id}}</b></p>
    <div style="display: flex">
        <p style="margin-right: 20px">Nombre: <?=$data->name?></p>
        <p>Apellido: <?=$data->lastname?></p>
    </div>
    <div style="display: flex">
        <p style="margin-right: 20px">Número de móvil:<?=$data->phone?></p>
        <p>Email: <?=$data->email?></p>
    </div>
</div>
<div style="margin-left: 30px">
    <p><b>Entrega:<?=$data->delivery == 1? 'Recoger en el museo':'Entrega a domicilio' ?> </b></p>
    <? if ($data->delivery == 2): ?>
    <div style="display: flex">
        <p style="margin-right: 20px">Ciudad: <?=$data->sity?></p>
        <p>Calle: <?=$data->street?></p>
    </div>
    <div style="display: flex">
        <p style="margin-right: 20px">Número: <?=$data->house?></p>
        <p>Planta: <?=$data->floor?></p>
    </div>
    <div style="display: flex">
        <p style="margin-right: 20px">Puerta: <?=$data->door?></p>
        <p>Portal: <?=$data->entrance?></p>
    </div>
    <div style="display: flex">
        <p style="margin-right: 20px">Cdigo postal: <?=$data->zipcode?></p>
    </div>
</div>
<?php endif;?>
<h2>Pedido:</h2>
<?php foreach ($data_order as $order):?>
<p>Product: <?=$order->product?>:  <?=$order->qty?>; Precio: <?=$order->price.'€'?> </p>
<?php endforeach;?>
<?php if ($data->delivery == 2) echo '<p">'."Entrega a domicilio: 1 - Precio: 10€".'</p>'?>
<p>Total:<?=$data->delivery !== 2 ? $total : $total + 10?>€</p>
<p>Mensajes: <?=$data->message?></p>

<div style="margin-top: 30px">
    <h2>Atención al cliente:</h2>
    <p>Tlf: 661 23 94 04</p>
    <p>Info@museoimaginacion.com</p>
</div>
<div style="margin-top: 30px">
     <p>Ha recibido este email enviado por museoimaginacion.com de Mercado de la fantasía S.L. porque ha realizado un
pedido en museoimaginacion.com.</p>
	<p>Al enviarnos sus datos personales, usted acepta automáticamente el procesamiento de sus datos personales. A su vez,
nos comprometemos a no transferir sus datos personales a terceros que no sean al Servicio de entrega, en caso de
que haya seleccionado la opción de entrega a domicilio.</p>
	<p>Si desea ejercer sus derechos de rectificación de sus datos de carácter personal o sus datos de pedido, cancelación de
sus datos de carácter personal o pedido, puede enviarnos un correo a info@museoimaginacion.com</p>
	<p>Claúsula de confidencialidad: Este mensaje, y en su caso, cualquier fichero anexo al mismo, puede contener
información confidencial o legalmente protegida (LOPD 15/1999 de 13 de Diciembre), siendo para uso exclusivo del
destinatario. No hay renuncia a la confidencialidad o secreto profesional por cualquier transmisión defectuosa o
errónea, y queda expresamente prohibida su divulgación, copia o distribución a terceros sin la autorización expresa
del remitente. Si ha recibido este mensaje por error, se ruega lo notifique al remitente enviando un mensaje al correo
electrónico info@museoimaginacion.com y proceda inmediatamente al borrado del mensaje original y de todas sus
copias. Gracias por su colaboración.</p>
	<p>Museo de la imaginación de Mercado de la fantasía S.L. Todos los derechos reservados.</p>
</div>
<div class="good_img">
<img src="{{asset("images/tarjeta.jpeg")}}">
</div>
{{--<div class="good_img">--}}
{{--<img src="{{asset("images/email/Logo.jpg")}}">--}}
{{--</div>--}}

{{--<div class="good_img">--}}
{{--<img src="{{asset("images/email/Tarjeta.jpeg")}}">--}}
{{--</div>--}}