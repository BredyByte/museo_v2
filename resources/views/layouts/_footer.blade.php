<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?=trans('footer.contact_us')?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="time">
                    <i class="micon micon-clock"></i>
                    <p><?=trans('footer.date')?></p>
                    <p><?=trans('footer.date1')?></p>
                    <p><?=trans('footer.date2')?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="phone">
                    <i class="micon  micon-iphone"></i>
                    <p>+34 951 50 13 19</p>
                    <p>+34 661 23 94 04</p>
                </div>
                <div class="mail">
                    <i class="micon micon-latter"></i>
                    <p>info@museoimaginacion.com</p>
                </div>
                <div class="col-md-4">
                    <img src="/images/icon_turista.jpg" alt="" style="width: 300px;height:150px;margin-top: 50px">
                </div>
            </div>
            <div class="col-md-4">
                <div class="soc">
                    <a href="https://www.instagram.com/museo_de_la_imaginacion/" class="" target="_blank"><i class="micon micon-insta transbtn"></i></a>
                    <a href="https://www.facebook.com/Museo-de-la-imaginaci%C3%B3n-212426332678789/" class="" target="_blank"><i class="micon micon-facebook transbtn"></i></a>
                    <a href="https://www.tripadvisor.es/Attraction_Review-g187438-d13999109-Reviews-Museo_De_La_Imaginacion-Malaga_Costa_del_Sol_Province_of_Malaga_Andalucia.html" class="" target="_blank"><i class="micon micon-tripadvisor transbtn"></i></a>
                </div>
                <div class="soc" style="display: flex;flex-direction: column;text-align: center">
                    <a href="{{route('privacy')}}" class="" target="_blank" style="color: white; margin-bottom: 5px">Política de privacidad</a>
                    <a href="{{route('legal')}}" class="" target="_blank" style="color: white; margin-bottom: 5px">Aviso legal</a>
                    <a href="{{route('cookie')}}" class="" target="_blank" style="color: white; margin-bottom: 5px">Política de cookies</a>
                </div>
            </div>

        </div>
    </div>
</footer>