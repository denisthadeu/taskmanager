@extends('template.index')


@section('content')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="{{ URL::to('/') }}">Home</a></li>
    <li class="active">Página em Construção</li>
</ul>
<div class="page-title">                    
    <h2><span class="glyphicon glyphicon-warning-sign"></span> Página em Construção!</h2>
</div>

@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        
    });
</script>
@stop