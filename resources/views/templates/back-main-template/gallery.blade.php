<!-- ===== GALERY ===== -->
<section id="gallery" class="gallery border-helper">
    <div class="gallery-header border-helper" style="background-image: url({{ asset('/templates/'.$name_template.'/images/galleryHeader.png') }} );"></div>

    <div class="gallery-title text-center">Gallery</div>

    <div class="gallery-content border-helper">

        

        @php $indexCover = 0 @endphp
        @foreach ($gallery as $data)

        {{-- // use $i as index --}}
        {{-- // use $athletes[$i] --}}
        @if ($indexCover === 0)
        <a href="{{asset('/templates/'.$data->name.'/bride/'.$data->image_url.'')}}" id="image-item" data-lightbox="mygallery">
            <div class="gallery-mainphoto border-helper" style="background-image: url('{{asset('/templates/oreocream/bride/'.$data->image_url.'')}}')"></div>
        </a>
        @php $indexCover++ @endphp
        @endif
        {{-- @endfor --}}
        @endforeach


        @php $indexCover = 0 @endphp

        @foreach ($gallery as $data)


        @if ($indexCover >= 1)
        <a href="{{asset('/templates/'.$data->name.'/bride/'.$data->image_url.'')}}" id="image-item" data-lightbox="mygallery">
            <div class="gallery-photos border-helper" style="background-image: url('{{asset('/templates/oreocream/bride/'.$data->image_url.'')}}')"></div>
        </a>
        @endif
        @php $indexCover++ @endphp

        @endforeach

        <a href="{{asset('templates/oreocream/bride/wedding-2.jpg')}}" id="image-item" data-lightbox="mygallery">
            <div class="gallery-photos border-helper" style="background-image: url('{{asset('templates/oreocream/bride/wedding-2.jpg')}}')"></div>
        </a>
        <a href="{{asset('templates/oreocream/bride/wedding-2.jpg')}}" id="image-item" data-lightbox="mygallery">
            <div class="gallery-photos border-helper" style="background-image: url('{{asset('templates/oreocream/bride/wedding-2.jpg')}}')"></div>
        </a>
        <a href="{{asset('templates/oreocream/bride/wedding-2.jpg')}}" id="image-item" data-lightbox="mygallery">
            <div class="gallery-photos border-helper" style="background-image: url('{{asset('templates/oreocream/bride/wedding-2.jpg')}}')"></div>
        </a>
        <div class="clear-both "></div>

    </div>
    <div class="gallery-footer border-helper" style="background-image: url({{ asset('/templates/'.$name_template.'/images/galleryFooter.png') }} );"></div>
</section>