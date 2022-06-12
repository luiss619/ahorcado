@foreach(range(1, $num_jugadors) as $i)
	<div class="col-6 col-lg-2">					
		<div class="block_jugador block_jugador_1" data-id-jugador="{{ $i }}">
			<img id="img_no_perfil_{{ $i }}" src="/img/no.jpg" class="img_no_perfil" data-id-jugador="{{ $i }}" data-foto="0" />
			<button class="btn btn_cambiar_foto_perfil" data-id-jugador="{{ $i }}">Cambiar foto</button>
			<span class="d-block">Jugador {{ $i }}</span>
			<input type="text" id="name_jugador_{{ $i }}" class="form-control name_jugador" />
		</div>					
	</div>
@endforeach