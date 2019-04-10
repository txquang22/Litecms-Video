<div class="col-md-12">
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="id">
                {!! trans('videos::videos.label.id') !!}
              </label><br />
              {!! $videos['id'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="v_id">
                {!! trans('videos::videos.label.v_id') !!}
              </label><br />
              {!! $videos['v_id'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="name">
                {!! trans('videos::videos.label.name') !!}
              </label><br />
              {!! $videos['name'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="slug">
                {!! trans('videos::videos.label.slug') !!}
              </label><br />
              {!! $videos['slug'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="status">
                {!! trans('videos::videos.label.status') !!}
              </label><br />
              {!! $videos['status'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="view_count">
                {!! trans('videos::videos.label.view_count') !!}
              </label><br />
              {!! $videos['view_count'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="duration">
                {!! trans('videos::videos.label.duration') !!}
              </label><br />
              {!! $videos['duration'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="file">
                {!! trans('videos::videos.label.file') !!}
              </label><br />
              {!! $videos['file'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="uploaded_by">
                {!! trans('videos::videos.label.uploaded_by') !!}
              </label><br />
              {!! $videos['uploaded_by'] !!}
         </div>
      </div>
[<a href='/videos/videos/{{ $videos['slug'] }}'>View</a>]
<hr>
</div>