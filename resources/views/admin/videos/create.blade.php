<div class="box-header with-border">
    <h3 class="box-title"> {{ trans('cms.new') }}  {!! trans('videos::videos.name') !!} </h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" id="btn-save"><i class="fa fa-floppy-o"></i> cms.save</button>
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" id="btn-cancel"><i class="fa fa-times-circle"></i> cms.close</button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">Videos</a></li>
        </ul>
        {!!Former::vertical_open()
        ->id('create-videos-videos')
        ->method('POST')
        ->files('true')
        ->action(URL::to('admin/videos/videos'))!!}
        <div class="tab-content">
            <div class="tab-pane active" id="details">
                @include('videos::admin.videos.partial.entry')
            </div>
        </div>
    {!! Former::close() !!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>
<script type="text/javascript">
(function ($) {
    $('#btn-save').click(function(){
        $('#create-videos-videos').submit();
    });
    $('#btn-cancel').click(function(){
        $('#entry-videos').load('{!!URL::to('admin/videos/videos/0')!!}');
    });
    $('#create-videos-videos')
    .submit( function( e ) {
        if($('#create-videos-videos').valid() == false) {
            toastr.error('Unprocessable entry.', 'Warning');
            return false;
        }
        var url  = $(this).attr('action');
        var formData = new FormData( this );

        $.ajax( {
            url: url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend:function()
            {
            },
            success:function(data, textStatus, jqXHR)
            {
                $('#main-list').DataTable().ajax.reload( null, false );
                $('#entry-videos').load('{!!URL::to('admin/videos/videos')!!}/0');
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
            }
        });
        e.preventDefault();
    });
}(jQuery));
</script>