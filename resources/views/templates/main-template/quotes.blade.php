<!-- ===== QUOTES ===== -->
<section id="quotes" class="quotes">
    <div class="quotes-header border-helper" ></div>
    <div class="quotes-content text-center border-helper">

        <div class="quotes-title border-helper">
            Kata Mutiara
        </div>

        @foreach($quote as $data)

        <div class="quotes-item border-helper">
            {{$data->quote}}
        </div>

        @endforeach

        <div class="quotes-item border-helper">
            بِسْمِ اللهِ الرَّحْمٰنِ الرَّحيمِ <br>
            وَمِنْ آيَاتِهِ أَنْ خَلَقَ لَكُمْ مِنْ أَنْفُسِكُمْ أَزْوَاجًا لِتَسْكُنُوا إِلَيْهَا وَجَعَلَ بَيْنَكُمْ مَوَدَّةً وَرَحْمَةً ۚ إِنَّ فِي ذَٰلِكَ لَآيَاتٍ لِقَوْمٍ يَتَفَكَّرُونَ<br>
            <br>
            “Dan diantara tanda-tanda kekuasaanNya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikanNya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berpikir.” [QS. Ar. Ruum (30):21].
        </div>

    </div>
    <div class="home-footer border-helper" style="background-image: url({{ asset('/templates/'.$name_template.'/images/Qfooter_a.png') }} );"></div>

</section>