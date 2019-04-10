{!!Former::horizontal_open()
->id('edit-videos-videos')
->method('PUT')
->files('true')
->action(URL::to('user/videos/videos') .'/'.$videos['eid'])!!}
@include('videos::user.videos.partial.entry')
{!! Former::close() !!}