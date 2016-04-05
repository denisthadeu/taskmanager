@extends('template.index')


@section('content')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="{{ URL::to('/') }}">Home</a></li>
    <li class="active">Serviço por Cliente</li>
</ul>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap panel-body">
    <div class="page-title">                    
        <h2><span class="fa fa-align-justify"></span> Serviço por Cliente</h2>
    </div>
    <div class="row" style="padding-bottom: 7px;">
        <div class="col-md-1">
            &nbsp;
        </div>
        <form>
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
    	<div class="col-md-5">
    		&nbsp;
    	</div>
    	<div class="col-md-1">
            <form method="get" action="{{ URL::to('relatorio/cronogramademanda') }}">
                <input name="excel" value="excel" type="hidden" />
                <input name="filtro-data" value="{{ $dataFiltro }}" type="hidden" />
    		    <button type="submit" class="btn btn-primary">Exportar EXCEL</button>
            </form>
    	</div>
    </div>
    <div class="row"></div>
    <div class="col-md-12">
        <table class="table table-bordered" style="background-color: #fff">
            <thead>
                <tr>
                    <th colspan="6" style="text-align: center;background-color: #B7DEE8;color: #8B9295">SERVIÇO POR CLIENTE {{ $titulo }}</th>
                </tr>
                <tr>
                    <td colspan="6" style="text-align: center;">&nbsp;</td>
                </tr>
                <tr>
                    <th style="background-color: #31869B;color: white;text-align: center;">SETOR</th>
                    <th style="background-color: #31869B;color: white;text-align: center;">CLIENTE</th>
                    <th style="background-color: #31869B;color: white;text-align: center;">SERVIÇO</th>
                    <th style="background-color: #31869B;color: white;text-align: center;">PRODUÇÃO</th>
                    <th style="background-color: #31869B;color: white;text-align: center;">TOTAL HORAS ESTIPULADAS</th>
                    <th style="background-color: #31869B;color: white;text-align: center;">TOTAL HORAS TRABALHADAS</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
            	@if(isset($results) && !empty($results))
            		@foreach($results as $keyResult => $result)
                        <tr>
                            <td colspan="6" style="text-align: center;color:#31869B;"><b>{{ $result["nome"] }}</b></td>
                        </tr>
	                    <tr>
                            <td rowspan="{{ $result["colspan"] }}" style="background-color: #31869B;color: white;vertical-align: middle;">{{ $result["nome"] }}</td>
                            @foreach($result["clientes"] as $keyCliente => $cliente)
                                <td rowspan="{{ $cliente["colspan"] }}" style="background-color: #8DB4E2;color:white;vertical-align: middle;">{{ $cliente["nome"] }}</td>
                                {{--*/ $contador = 0; /*--}}
                                @if(empty($cliente["tipo"]))
                                        <td style="background-color: #8DB4E2;color: white;">-</td>
                                        <td style="background-color: #8DB4E2;color: white;">-</td>
                                        <td style="background-color: #8DB4E2;color: white;">00:00</td>
                                        <td style="background-color: #8DB4E2;color: white;">00:00</td>
                                    </tr>
                                @else
                                    @foreach($cliente["tipo"] as $keyTipo => $tipo)
                                        @if($contador > 0)
                                            <tr>
                                        @endif
                                            <td style="text-align: left; background-color: #8DB4E2;color: white;">{{ $tipo["nome"] }}</td>
                                            <td style="background-color: #8DB4E2;color: white;">{{ $tipo["projetos"] }}</td>
                                            <td style="background-color: #8DB4E2;color: white;">{{ Formatter::convertToHoursMins($tipo["horasEstipuladas"]) }}</td>
                                            <td style="background-color: #8DB4E2;color: white;">{{ Formatter::convertToHoursMins($tipo["horasFeitas"]) }}</td>
                                        </tr>
                                        {{--*/ $contador++; /*--}}
                                    @endforeach
                                @endif
                                <tr>
                                    <td colspan="3">&nbsp;</td>
                                    <td style="background-color: #31869B;color: white;">Total: {{ Formatter::convertToHoursMins($cliente["horasEstipuladas"]) }}</td>
                                    <td style="background-color: #31869B;color: white;">Total: {{ Formatter::convertToHoursMins($cliente["horasFeitas"]) }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="6">&nbsp;</td>
                            </tr>
	                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        
    });
</script>
@stop