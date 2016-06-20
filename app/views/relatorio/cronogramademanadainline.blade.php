@extends('template.index')


@section('content')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="{{ URL::to('/') }}">Home</a></li>
    <li class="active">Serviço por Cliente (Inline)</li>
</ul>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap panel-body">
    <div class="page-title">                    
        <h2><span class="fa fa-align-justify"></span> Serviço por Cliente (Inline)</h2>
    </div>
    <div class="row" style="padding-bottom: 7px;">
        <div class="col-md-1">
            &nbsp;
        </div>
        <form method="get" action="{{ URL::to('relatorio/cronogramademandainline') }}">
            <div class="col-md-2">
                <select class="form-control" name="filtro-setor">
                    <option value="0">Todos os Setores</option>
                        @if(isset($equipesFiltro) && !empty($equipesFiltro))
                            @foreach($equipesFiltro as $keyResult => $equ)
                                <option value="{{ $equ->id }}" @if( $dataSetor == $equ->id ) selected="" @endif >{{ $equ->nome }}</option>
                            @endforeach
                        @endif
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-control" name="filtro-data">
                    @for ($i = 2016; $i <= date('Y'); $i++)
                        @for ($j = 1; ($j <= 12 && $i < date('Y')) || ($j <= date('n')); $j++)
                            <option @if($dataFiltro == $i."-".Formatter::leadingZero($j)) SELECTED @endif value="{{ $i }}-{{ Formatter::leadingZero($j) }}"> {{ $j }} de {{$i}}</option>
                        @endfor    
                    @endfor
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </form>
    	<div class="col-md-3">
    		&nbsp;
    	</div>
    	<div class="col-md-1">
            <form method="get" action="{{ URL::to('relatorio/cronogramademandainline') }}">
                <input name="excel" value="excel" type="hidden" />
                <input name="filtro-data" value="{{ $dataFiltro }}" type="hidden" />
                <input name="filtro-setor" value="{{ $dataSetor }}" type="hidden" />
    		    <button type="submit" class="btn btn-primary">Exportar EXCEL</button>
            </form>
    	</div>
    </div>
    <div class="row"></div>
    <div class="col-md-12">
        {{ $html }}
    </div>
</div>
@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        
    });
</script>
@stop