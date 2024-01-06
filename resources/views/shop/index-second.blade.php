@extends('layouts.app')
@section('title',$title)
@section('body_class','shoppage shopgift')
@section('_header')
    @include('layouts._header2')
@endsection
@section('content')
    <section id="cont">
        <div class="top_bl">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shop_btns">
                            <a href="{{route('shop')}}" class="shopbtn1 bttn transbtn"><?= trans('shop.buy_tickets');?></a>
                            <a href="{{route('gifts')}}" class="shopbtn2 bttn transbtn active"><?= trans('shop.buy_gifts');?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery_bl gridp20">
            <div class="container">
                <div style="margin:0 auto"><b>Condiciones de venta</b><br></div>
                <br><br>
                - Las entradas compradas vía online le dan derecho a visitar nuestro museo una vez.<br>
                - Las mismas entradas le dan derecho a visitar nuestro museo cualquier día (excepto los días<br>
                en que el museo está cerrado) y en cualquier momento (de 11:00 a 19:00) desde el momento de la compra de las entradas.<br>
                - Las entradas compradas no requieren registro adicional ni reserva para la visita.<br>
                - Antes de la visita debe presentar las entradas compradas vía online en la recepción del museo de forma impresa o electrónica.<br>
                - Las entradas son válidas durante los siguientes 6 meses a partir de la fecha de compra.<br>
                - Tarifa reducida - la entrada debe ir acompañada de la acreditación correspondiente.<br>
                - El Museo se reserva el derecho de admisión.<br>
                - Por motivos de exclusividad, el Museo podrá modificar su horario así como la apertura de puertas.<br>
                - Tras efectuar la compra, recibirá un correo electrónico con su entrada en un plazo máximo de 24 horas.<br>

                <div style="margin-top: 20px"><b>Política de Modificación y Cancelación/Devolución</b><br></div>
                <div style="margin-top: 20px"><b> Modificación</b><br></div>
                <br><br>

                - No se admiten modificaciones de cantidades de entradas ya emitidas.<br>
                - No se admiten modificaciones de precios de entradas ya emitidas.<br>
                <div style="margin-top: 20px"><b>  La política de Modificación permite modificar los datos del visitante (Nombres y Apellidos) o fecha de la visita si la entradas se han comprado a terceros.</b><br></div>
                <br><br>

                • El pedido no puede ser modificado parcialmente. La modificación solo se puede hacer al completo.<br>
                • Para solicitar modificación de datos del visitante puede enviarnos una solicitud por correo electrónico a info@museoimaginacion.com<br>
                • La solicitud debe enviarse desde el mismo correo electrónico del que se realizó el pedido y debe incluir:<br>
                <p></p>
                - Número y fecha de pedido<br>
                - Nombres y apellidos del nuevo visitante<br>
                - Correo electrónico del nuevo visitante<br>
                <div style="margin-top: 20px"><b>LA MODIFICACIÓN DE DATOS DEL VISITANTE DEBE SOLICITARSE ANTES DE 48 HORAS DE LA VISITA.</b><br></div>
                <br><br>

                El pedido anterior que ha sido modificado a otro nombre será cancelado
                <div style="margin-top: 20px"><b>Cancelación/Devolución</b><br></div>
                <br><br>

                - No se admiten Cancelaciones/Devoluciones de pedidos/entradas ya emitidas.<br>
                <div style="margin-top: 20px"><b> Si cualquier día laboral (excepto los miércoles), el museo permanece cerrado por motivos técnicos u otras circunstancias de fuerza mayor, se aplicará lo siguiente:</b><br></div>
                <br><br>

                - La oportunidad de visitar el museo otro día, o la devolución del pago en su totalidad.<br>
                - En el caso de reembolso, nuestra política solo nos permite reembolsar la cantidad total pagada. No nos podemos hacer responsables de cualquier plan de viajes o gastos adquiridos por tu parte.

            </div>
        </div>

    </section>
@endsection