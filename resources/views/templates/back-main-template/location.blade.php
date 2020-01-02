

<!-- ===== LOCATION ===== -->
<section id="location" class="location">

    <div class="location-header border-helper" style="background-image: url({{ asset('/templates/'.$name_template.'/images/locationHeader.png') }} );"></div>

    <div class="location-content text-center border-helper">

        <div class="location-title border-helper">Peta Lokasi</div>

        @foreach($location as $data)

        <div class="location-maps border-helper">

            <img src="{{asset('templates/oreocream/images/'.$data->maps_image_url.'')}}" alt="#">

        </div>

        <a href="{{$data->gmaps_url}}">
            <div class="location-icon border-helper"> </div>
        </a>

        @endforeach

        <div class="location-info border-helper">Klik icon untuk lihat dari Google Maps</div>

    </div>

    <div class="location-footer border-helper"></div>

</section>