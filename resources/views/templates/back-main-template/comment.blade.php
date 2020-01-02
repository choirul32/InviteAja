<!-- ===== COMMENT ===== -->
<section id="comment" class="comment">
    <div class="comment-header border-helper"></div>
    <div class="comment-content border-helper">

        <div class="comment-title text-center border-helper">Ucapan</div>

        @php $info_id = 0 @endphp

        @foreach ($home as $data)

        @if ($info_id === 0)

        @php $info_id = $data->info_id @endphp

        {{-- @php echo (''.$info_id.''); @endphp --}}
        @endif

        @endforeach

        <script>

        $(document).ready(function(){

            // alert("READY");

            $("#commentForm").submit(function() {

                // alert("SUBMIT");

                var nama = $("input[name=username]").val();

                var comment = $("input[name=comment]").val();

                var token = $("input[name=_token]").val();

                var info_id = "{{ $info_id }}";

                // alert("tes:"+nama);

                
                $.post( "/wedding/postcomment", { username: nama, comment: comment, info_id: info_id, _token : token }).done(function( data ) {
                    alert( "nama anda : "+ data.guest_name + "\n" + "komentar anda : " + data.comment );
                    $(".comment-list").prepend('<div class="comment-list-item border-helper"> <p class="comment-list-item-name">'+data.guest_name+'</p> <p class="comment-list-item-message">'+data.comment+'</p></div>');
                });
                return false ; 

            });
       
           
          });

            </script>

        {{-- <form class="comment-form border-helper" action="/wedding/postcomment" method="post"> --}}
            <form id="commentForm" class="comment-form border-helper" method="post">
            @csrf
            <input type = "hidden" name = "info_id" value = "@php echo ($info_id) @endphp">

            <div class="form-group">
                <label>Nama Anda:</label>
                <input type="text" name="username" class="form-control" />
            </div>
            <div class="form-group">
                <label>Ucapan:</label>
                <input type="text" name="comment" class="form-control" />
            </div>
            <div class="text-center">
                <button type="submit" value="submit" class="btn button-send-comment btn-danger">Kirim Ucapan</button>
            </div>
        </form>

        <div class="comment-list border-helper">

            @foreach ($comment as $data)
            <div class="comment-list-item border-helper">
                <p class="comment-list-item-name">{{$data->guest_name}}</p>
                <p class="comment-list-item-message">{{$data->comment}}</p>
            </div>
            @endforeach
            {{-- <div class="comment-list-item border-helper">
                <p class="comment-list-item-name">anonymous</p>
                <p class="comment-list-item-message">Samawa, semoga bahagia selamanya</p>
            </div>
            <div class="comment-list-item border-helper">
                <p class="comment-list-item-name">anonymous</p>
                <p class="comment-list-item-message">Samawa, semoga bahagia selamanya</p>
            </div> --}}
        </div>

    </div>
    <div class="comment-footer border-helper" style="background-image: url({{ asset('/templates/'.$name_template.'/images/commentFooter.png') }} );"></div>
</section>