 <!-- Start Page Header -->
 <div class="page-header">
    <h1 class="title">{{ $titulo }}</h1>
    <ol class="breadcrumb">
        @if(isset($itens))
            @foreach($itens as $item)
                @if(isset($item['ativo']))
                    <li class="breadcrumb-item active">{{ $item['nome'] }}</li>
                @else
                    <li class="breadcrumb-item"><a href="{{ isset($item['route']) ? route($item['route']) : '#' }}">{{ $item['nome'] }}</a></li>
                @endif
            @endforeach
        @endif
    </ol>
    @if(isset($opcoes))
    <!-- Start Page Header Right Div -->
    <div class="right">
        {{ $opcoes }}
    </div>
    <!-- End Page Header Right Div --> 
    @endif
</div>
<!-- End Page Header --> 