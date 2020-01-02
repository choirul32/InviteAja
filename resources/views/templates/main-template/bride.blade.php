<!-- ===== BRIDE ===== -->
<section id="bride" class="bride border-helper">
    <div class="bride-header border-helper" style="background-image: url({{ asset('/templates/'.$name_template.'/images/brideHeader.png') }} );"></div>

    <div class="bride-content text-center border-helper" style="background-image: url({{ asset('/templates/'.$name_template.'/images/brideBackground.png') }} );">

        @foreach($bride as $data)

        <div id="brideIntro" class="bride-intro border-helper">
            {{$data->intro}}
        </div>
        <div id="brideMenPhoto" class="bride-photo border-helper">
            <img src="{{asset('templates/oreocream/bride/'.$data->men_profil_url.'')}}" alt="#">
        </div>

        <div id="brideMenName" class="bride-name border-helper">
            {{$data->men_long_name}}
        </div>

        <div id="brideNameParents" class="bride-parents border-helper">
            {{$data->men_parents_name}}
        </div>

        <div id="brideWomanPhoto" class="bride-photo border-helper">
            <img src="{{asset('templates/oreocream/bride/'.$data->women_profil_url.'')}}" alt="#">
        </div>

        <div id="brideWomanName" class="bride-name border-helper">
            {{$data->women_long_name}}
        </div>

        <div id="brideWomanParents" class="bride-parents border-helper">
            {{$data->women_parents_name}}
        </div>

        <div class="bride-outro border-helper">
            {{$data->outro}}
        </div>

        @endforeach

    </div>
    <div class="bride-footer border-helper" style="background-image: url({{ asset('/templates/'.$name_template.'/images/brideFooter.png') }} );"></div>
</section>