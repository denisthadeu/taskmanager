<<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <table style="background-color: #fff">
        <thead>
            <tr>
                <th colspan="6" style="text-align: center;background-color: #B7DEE8;color: #8B9295">SERVIÇO POR CLIENTE JANEIRO 2016</th>
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
</body>
</html>