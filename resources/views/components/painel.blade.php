<div class="col-md-{{ $colunas }}" style=" ">
	<section class="panel panel-default ">
		@if(isset($titulo))
			<div class="panel-title">{{ $titulo }}</div>
		@endif
		<div class="panel-body">
			{{ $slot }}
		</div>
	</section>
</div>