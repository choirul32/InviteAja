<!-- ===== QUOTES ===== -->
<section id="quotes" class="quotes">
    <div class="quotes-header border-helper" style="background-image: url({{ asset('/templates/'.$name_template.'/images/quotesHeader.png') }} );"></div>
    <div class="quotes-content text-center border-helper">

        <div class="quotes-title border-helper">
            Kata Mutiara
        </div>

        @foreach($quote as $data)

        <div class="quotes-item border-helper">
            {{$data->quote}}
        </div>

        @endforeach

        {{-- <div class="quotes-item border-helper">
            " Pernikahan adalah pertemuan kedua insan dalam satu ikatan cinta "
        </div> --}}

    </div>
    <div class="quotes-footer border-helper" style="background-image: url({{ asset('/templates/'.$name_template.'/images/quotesFooter.png') }} );"></div>
</section>
