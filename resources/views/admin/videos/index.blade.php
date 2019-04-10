@extends('admin::curd.index')
@section('heading')
<i class="fa fa-file-text-o"></i> {!! trans('videos::videos.name') !!} <small> {!! trans('cms.manage') !!} {!! trans('videos::videos.names') !!}</small>
@stop

@section('title')
{!! trans('videos::videos.names') !!}
@stop

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="https://lavalite.org/admin"><i class="fa fa-dashboard"></i> {!! trans('cms.home') !!} </a></li>
    <li class="active">{!! trans('videos::videos.names') !!}</li>
</ol>
@stop

@section('entry')
<div class="box box-warning" id='entry-videos'>
</div>
@stop

@section('tools')
@stop

@section('content')
<table id="main-list" class="table table-striped table-bordered">
    <thead>
        
    </thead>
</table>
@stop
@section('script')
<script type="text/javascript">

var oTable;
$(document).ready(function(){
    $('#entry-videos').load('{!!URL::to('admin/videos/videos/0')!!}');
    oTable = $('#main-list').dataTable( {
        "ajax": '{!! URL::to('/admin/videos/videos') !!}',
        "columns": [
            
        ],
        "videosLength": 50
    });

    $('#main-list tbody').on( 'click', 'tr', function () {
        $(this).toggleClass("selected").siblings(".selected").removeClass("selected");

        var d = $('#main-list').DataTable().row( this ).data();

        $('#entry-videos').load('{!!URL::to('admin/videos/videos')!!}' + '/' + d.id);

    });
});
</script>
@stop

@section('style')
@stop