<div class='col-md-4 col-sm-6'>
                       {!! Former::text('v_id')
                       -> label(trans('videos::videos.label.v_id'))
                       -> placeholder(trans('videos::videos.placeholder.v_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('name')
                       -> label(trans('videos::videos.label.name'))
                       -> placeholder(trans('videos::videos.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('status')
                       -> label(trans('videos::videos.label.status'))
                       -> placeholder(trans('videos::videos.placeholder.status'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('view_count')
                       -> label(trans('videos::videos.label.view_count'))
                       -> placeholder(trans('videos::videos.placeholder.view_count'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('duration')
                       -> label(trans('videos::videos.label.duration'))
                       -> placeholder(trans('videos::videos.placeholder.duration'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('file')
                       -> label(trans('videos::videos.label.file'))
                       -> placeholder(trans('videos::videos.placeholder.file'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('uploaded_by')
                       -> label(trans('videos::videos.label.uploaded_by'))
                       -> placeholder(trans('videos::videos.placeholder.uploaded_by'))!!}
                </div>

{!!   Former::actions()
->large_primary_submit('Submit')
->large_inverse_reset('Reset')
!!}