@extends('template.index')


@section('content')
<!-- START BREADCRUMB -->
<ul class="breadcrumb push-down-0">
    <li><a href="{{ URL::to('/') }}">Home</a></li>
    <li class="active">Error 404</li>
</ul>
<!-- END BREADCRUMB -->                                                

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <div class="error-container">
                <div class="error-code">404</div>
                <div class="error-text">Página não encontrada</div>
                <div class="error-subtext">Infelizmente não foi possível localizar esta página!</div>
                <div class="error-actions">                                
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ URL::to('/') }}"><button class="btn btn-info btn-block btn-lg">Dashboard</button></a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-block btn-lg" onClick="history.back();">Página Anterior</button>
                        </div>
                    </div>                                
                </div>
            </div>

        </div>
    </div>
    
                                                        
</div>                
<!-- END PAGE CONTENT WRAPPER -->
@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        
    });
</script>
@stop