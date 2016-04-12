@extends('template.index')


@section('content')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="{{ URL::to('/') }}">Home</a></li>
    <li class="active">Visualizar Equipes</li>
</ul>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap panel-body" ng-controller="TaskController AS task">
    <div>
    	<h1> @{{ store.product.name }}</h1>
    	<h2> $@{{ store.product.price }}%></h2>
    	<p> @{{ store.product.description }} </p>
    </div>
</div>            
<!-- END PAGE CONTENT -->
@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function() {

    });
</script>
@stop