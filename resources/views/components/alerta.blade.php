<div class="foxlabel-alert foxlabel-alert-icon alert{{ $alerta ?? 1 }}"> 
    <i class="fa fa-{{ $icone ?? 'check' }}"></i> 
    {{-- <a href="#" class="closed">×</a>  --}}
   {{ $slot }}
</div>