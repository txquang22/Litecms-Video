<div class="box-header with-border">
    <h3 class="box-title">  {!! trans('videos::videos.names') !!}</h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" id="btn-new-videos"><i class="fa fa-plus-circle"></i> cms.new </button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" style="min-height:100px">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <h1 class="text-center">
            <small>
            <button type="button" class="btn btn-app" data-toggle="tooltip" data-placement="top" title=""  id="btn-new-videos-icn">
            <span class="badge bg-purple">{!! Videos::count('videos') !!}</span>
            <i class="fa fa-plus-circle  fa-3x"></i>
            {{ trans('cms.create') }} {!! trans('videos::videos.name') !!}
            </button>
            <br>{!! trans('videos::videos.text.preview') !!}
            </small>
            </h1>
        </div>
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('#btn-new-videos, #btn-new-videos-icn').click(function(){
        $('#entry-videos').load('{!!URL::to('admin/videos/videos/create')!!}');
    });
});
</script>