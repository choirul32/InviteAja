<!-- ===== EVENT ===== -->
<section id="event" class="event border-helper">
    <div class="event-header border-helper" style="background-image: url({{ asset('/templates/'.$name_template.'/images/eventHeader.png') }} );"></div>

    <div class="event-content text-center border-helper" style="background-image: url({{ asset('/templates/'.$name_template.'/images/eventBackground.png') }} );">

        <div class="event-title">Rangkaian Acara</div>
        @foreach($event as $data)
        <div class="event-events">
            <div class="event-icon" style="background-image: url({{ asset('/templates/'.$name_template.'/images/eventIcon.png') }} );"></div>
            <div class="event-events-title">{{$data->name}}</div>
            
            <h4 class="event-events-date">{{date('l, d F Y', strtotime($data->date))}}</h4>
            <h4 class="event-events-time">Jam {{$data->time_start}} - {{$data->time_end}} {{$data->timezone}}</h4>
            <h4 class="event-events-address">{{$data->address}}</h4>
        </div>
        @endforeach
    </div>

    <div class="event-footer border-helper" style="background-image: url({{ asset('/templates/'.$name_template.'/images/eventFooter.png') }} );"></div>
</section>