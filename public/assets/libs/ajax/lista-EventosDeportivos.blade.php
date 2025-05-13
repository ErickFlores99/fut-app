<div class="row">
    @foreach($eventosDeportivos as $evento)
        <div class="card m-3" style="width: 18rem;">
            <a class="btn" href="{{ route('detalleIndex', $evento->id) }}">
                <div class="card-body">
                    <h5 class="card-title">{{$evento->competencia->nombre ?? ''}} - {{$evento->nombre}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{$evento->categoria->nombre ?? ''}} - {{$evento->rama->nombre ?? ''}}</h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{$evento->diajuego->nombre ?? ''}}</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                
                    <button class="card-link btn btn-primary btn-sm">Reglamento</button>
                </div>
            </a>
        </div>  
    @endforeach
</div>