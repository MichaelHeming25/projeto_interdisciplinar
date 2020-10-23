<form class="form-horizontal" id="form" role="form" action="{{ url('/admin/servicos/editar/salvar') }}/{{ $id }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
	@csrf

	<div class="sessao1">
		<span>Informações do cliente</span>
	</div>

	<div class="form-group" style="margin:0;">
		<label for="id_cliente" class="control-label">Cliente:</label>
		<select class="form-control" id="id_cliente" name="id_cliente">
			@foreach ($clientes as $cliente)
				<option value="{{ $cliente['id'] }}" {{ ($cliente['id'] == $id_cliente) ? 'selected' : '' }} >{{ $cliente['name'] }}</option>
			@endforeach
		</select>
	</div>

	<div class="sessao2">
		<span>Informações do carro</span>
	</div>

	<div class="groups-two" style="display:flex;justify-content:space-between;padding:0.5rem 0 0.5rem 0;">

		<div class="form-group-tipo2">
			<label for="ano" class="control-label">Ano</label>
			<input type="text" class="inputs" id="ano" name="ano" value="{{$ano}}" required>
		</div>

		<div class="form-group-tipo2">
			<label for="marca" class="control-label">Marca</label>
			<input type="text" class="inputs" id="marca" name="marca" value="{{$marca}}" required>
		</div>

	</div>

	<div class="groups-two" style="display:flex;justify-content:space-between;padding:0.5rem 0 0.5rem 0;">

		<div class="form-group-tipo2">
			<label for="modelo" class="control-label">Modelo</label>
			<input type="text" class="inputs" id="modelo" name="modelo" value="{{$modelo}}" required>
		</div>

		<div class="form-group-tipo2">
			<label for="placa" class="control-label">Placa</label>
			<input type="text" class="inputs" id="placa" name="placa" value="{{$placa}}" required>
		</div>

	</div>

	<div class="form-group" style="flex-direction: column">
		<label for="phone" class="control-label">Descrição</label>
		<textarea name="descricao" id="descricao" class="inputs" rows="5" value="{{$descricao}}" required>{{$descricao}}</textarea>
	</div>
	
	<div class="form-group" style="flex-direction: column">
		<label for="modelo" class="control-label">Valor do serviço</label>
		<input type="number" class="inputs" id="valor" name="valor" value="{{$valor}}" required>
	</div>

	<div class="groups-two" style="display:flex;justify-content:flex-start;padding:1.5rem 0rem 1.5rem 0rem;flex-direction:column;align-items:flex-start;">
		<label for="switch">Status do serviço</label>
		<label class="control-inline fancy-radio">
			<input type="radio" name="status" value="0" {{ ($status == "0") ? "checked" : "" }}>
			<span><i></i>Em andamento</span>
		</label>
		<label class="control-inline fancy-radio">
			<input type="radio" name="status" value="1" {{ ($status == "1") ? "checked" : "" }}>
			<span><i></i>Finalizado</span>
		</label>
		<label class="control-inline fancy-radio">
			<input type="radio" name="status" value="2" {{ ($status == "2") ? "checked" : "" }}>
			<span><i></i>Extornado</span>
		</label>
	</div>

	<button type="submit" class="btn btn-success"><i class="icon ion-checkmark-circled" style="padding-right:0.5rem;"></i>Atualizar</button>
</form>