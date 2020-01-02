<!-- ===== HOME ===== -->
<section id="home" class="home border-helper">
    <div class="home-header border-helper" style="background-image: url({{ asset('/templates/'.$name_template.'/images/homeHeader.png') }} );"></div>

    <div class="home-content border-helper">

        @foreach($home as $data)
        <div id="homeMen" class="home-men border-helper">{{$data->men_nick_name}}</div>
        <div class="home-separator border-helper" style="background-image: url({{ asset('/templates/'.$name_template.'/images/separator.png') }} );">
        </div>
        <div id="homeWomen" class="home-women border-helper">{{$data->woman_nick_name}}</div>

        <div id="homeTitle" class="home-title border-helper">{{$data->title}}</div>
        @endforeach
        @foreach($event as $data)
        @if($data->show_home=="true")
        <div id="homeDate" class="home-date border-helper">{{date("d-m-Y",strtotime($data->date))}}</div>
        <div id="homeAddress" class="home-address border-helper">{{$data->address}}</div>
        @endif
        @endforeach
    </div>

    <div class="home-footer border-helper" style="background-image: url({{ asset('/templates/'.$name_template.'/images/homeFooter.png') }} );"></div>

</section>