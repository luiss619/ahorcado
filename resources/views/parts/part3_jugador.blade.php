<div class="card p-3">
	<div class="row text-center">
		<div class="col-12">
			@if(count($array_jugadores['ganadores']) == 0)
				<p class="msg_felicitats">
					El déu de les mentides us ha impedit la victòria, <br>millor sort la propera vegada
				</p>
				<img class="img-fluid mb-2" src="/img/loki.gif" />
			@else
				<p class="msg_felicitats">SUPER HEROIS GUANAYADORS</p>
				@foreach($array_jugadores['ganadores'] as $jug)
					<div class="jug_ganador animate__animated animate__bounce animate__infinite">
						<img src="{{ $jug['foto'] }}" class="" />
						<small><b>Jugador {{ $jug['id'] }}</b></small><br>
						<p>{{ $jug['name'] }}</p>
						<div class="barra_vida_100">
							<small class="vida_text">VIDA</small>
							<small class="vida_val">100/100</small>
						</div>
					</div>
				@endforeach
				@if(count($array_jugadores['perdedores']) > 0)
					<p class="msg_felicitats mt-3">VS</p>
				@endif
			@endif
		</div>
		<div class="col-12 mt-1 mb-2">
			@if(count($array_jugadores['perdedores']) > 0)
				@foreach($array_jugadores['perdedores'] as $jug)
					<div class="jug_perdedor animate__animated animate__rollIn">
						<img src="{{ $jug['foto'] }}" class="" />
						<p>{{ $jug['name'] }}</p>
						<div class="barra_vida_0">
							<small class="vida_text">VIDA</small>
							<small class="vida_val">0/100</small>
						</div>
					</div>
				@endforeach
			@endif
		</div>
		<div class="col-12 mt-5">
			<div class="row">
				<div class="col-6">
					<a href="/game/reiniciar?type=comenzar" class="btn btn_reiniciar_juego">Revenja</a>
				</div>
				<div class="col-6">
					<a href="/game/reiniciar?type=comenzar_nuevo" class="btn btn_comenzar_nuevo">Nova partida</a>
				</div>
			</div>
		</div>
	</div>
</div>