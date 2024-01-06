<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts._head')
<body class=" @yield('body_class')">
<div class="open-backdrop"></div>
  @yield('_header')
<section id="cont">
            @yield('content')
                 @include('layouts._footer')
</section>
<div style="display: flex; justify-content: flex-start;margin-bottom: 5px">© Museo da la imaginacion, 2018 – <?= date('Y')?>.  
<div style="margin-left:10px;">
 Developed by: <a href="https://issoco.com/" title='ISSOCO' style="text-decoration:none; color:white;"> ISSOCO</a>
</div>
</div>
@include('layouts.scripts')
<script>
    $(document).ready(function (e) {
        $(document).on('click','#costDeliver1',function () {
            $('#freeDeliver2').attr('id','freeDeliver1')
            var sum =  $('#count-sum-id').text();
            var new_sum = (Number(sum) + 10)
            $('.summ_price').text(new_sum);
            $('#costDeliver1').attr('id','costDeliver2')
        });

        $(document).on('click','#freeDeliver1',function () {
            $('#costDeliver2').attr('id','costDeliver1')
            $('#freeDeliver1').attr('id','freeDeliver2')
            var sum =  $('#count-sum-id').text();
            var new_sum = (Number(sum) - 10)
            $('.summ_price').text(new_sum);



        })
        $(document).on('click','.plusbtn',function () {
            var id  = $(this).attr('id');
            $.ajax({
                url: "/shop/add",
                data:{
                    'id':id,
                }
            }).done(function(data) {
                $('#count-'+id ).html(data[0])
                $('#counts-'+id ).html(data[0])
                $('.summ_price' ).html(data[1])

            });
        })

    })
    $(document).ready(function (e) {
        $(document).on('click','.minusbtn',function () {
            var id  = $(this).attr('id');
            $.ajax({
                url: "/shop/remove",
                data:{
                    'id':id,
                }
            }).done(function(data) {
                $('#count-'+id ).html(data[0])
                $('#counts-'+id ).html(data[0])
                $('.summ_price' ).html(data[1])
            });
        })

    })



</script>
</body>

</html>
