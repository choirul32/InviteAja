
<!-- ===== HOME ===== -->
<section id="home" class="home border-helper">

    <div class="location-title border-helper text-center">Peta Lokasi</div>
    @foreach($location as $data)
    <div class="text-center" style="background-image: url({{asset('templates/'.$name_template.'/images/'.$data->maps_image_url.'')}})">
    </div>
    @endforeach
    <div class="row location-maps" style="background-image: url({{ asset('/templates/'.$name_template.'/images/Lokasi.png') }} );">
        <div class="col-3 home-side" style="background-image: url({{ asset('/templates/'.$name_template.'/images/Qside_a.png') }} );"></div>
        <div class="col-6 ">
            
        </div>
        <div class="col-3 home-side" style="background-image: url({{ asset('/templates/'.$name_template.'/images/Qside_b.png') }} );"></div>
    </div>
    <div class="row mt-6">
        <div class="col-3"></div>
        <div class="col location-icon" style="background-image: url({{ asset('/templates/'.$name_template.'/icons/loc_ikon.png') }} ); height: 50px;"></div>
        <div class="col location-icon" style="background-image: url({{ asset('/templates/'.$name_template.'/icons/Screenshot_2019-11-17.png') }} ); height: 100px;"></div>
        <div class="col-3"></div>
    </div>
    <div class="home-footer row border-helper" style="background-image: url({{ asset('/templates/'.$name_template.'/images/Qfooter_a.png') }} );"></div>

</section>
