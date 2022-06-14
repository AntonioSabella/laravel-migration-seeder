@extends ('layouts.app')

@section('content')

<main>

<div class="container">
        <h1 class='text-center'>Vacation packages:</h1>
        <div class="vacations row row-cols-3">

            @forelse($vacations as $vacation)
                <div class="col">
                        <div class="vacation">
                            <img class="img-fluid" src="{{$vacation->img}}" alt="{{$vacation->destination}}">
                            <h4>{{$vacation->destination}}</h4>
                            <span><strong>Period: </strong> {{$vacation->start_vacation}} / {{$vacation->end_vacation}} </span>
                            <h5>"{{$vacation->hotel}}"</h5>
                            <small><strong>Numero stanze</strong>: {{$vacation->rooms}}</small>
                            <small><strong>Adulti</strong>: {{$vacation->customers}}</small>
                            <div class="package_type">
                            {{$vacation->package_type}}
                            </div>
                            <div class="price">
                            € {{$vacation->price}}
                            </div>
                            <small><strong>Viaggio</strong> : {{$vacation->transport_type}} - "{{$vacation->transport_company}}"</small>
                            <p><i>"{{$vacation->vacation_notes}}"</i></p>
                        </div>

                    </a>
                </div>
            @empty
            <div class="col">Nessun risultato da mostrare</div>
            @endforelse

        </div>
    </div>


</main>




@endsection
