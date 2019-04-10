<div class="box-header with-border">
    <h3 class="box-title"> cms.edit  {!! trans('videos::videos.name') !!} [{!!$videos->name!!}] </h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" id="btn-save"><i class="fa fa-floppy-o"></i> cms.save</button>
        <button type="button" class="btn btn-default btn-sm" id="btn-close"><i class="fa fa-times-circle"></i> cms.close</button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#videos" data-toggle="tab">{!! trans('videos::videos.tab.name') !!}</a></li>
        </ul>
        {!!Former::vertical_open()
        ->id('edit-videos')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(URL::to('admin/videos/videos/'. $videos['id']))!!}
        <div class="tab-content">
            <div class="tab-pane active" id="videos">
                @include('videos::admin.videos.partial.entry')
            </div>
        </div>
        {!!Former::close()!!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>
<script type="text/javascript">

        (function ($) {
            $('#btn-close').click(function(){
                $('#entry-videos').load('{!!URL::to('admin/videos/videos')!!}/{!!$videos->id!!}');
            });

            $('#btn-save').click(function(){
                $('#edit-videos').submit();
            });

            $('#edit-videos')
            .submit( function( e ) {

                if($('#edit-videos').valid() == false) {
                    toastr.warning({{ trans('message.unprocessable') }}, '{{ trans('cms.warning') }}');
                    return false;
                }

                var formURL  = "{!! URL::to('admin/videos/videos/')!!}/{!!$videos->id!!}";
                $.ajax( {
                    url: formURL,
                    type: 'POST',
                    data: new FormData( this ),
                    processData: false,
                    contentType: false,
                    success:function(data, textStatus, jqXHR)
                    {
                        $('#entry-videos').load('{!!URL::to('admin/videos/videos')!!}/{!!$videos->id!!}');
                        $('#main-list').DataTable().ajax.reload( null, false );
                    },
                    error: function(jqXHR, textStatus, errorThrown)
                    {
                    }
                });
                e.preventDefault();
            });

        }(jQuery));

</script>