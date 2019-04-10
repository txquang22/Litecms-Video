{!!Former::horizontal_open()
->id('create-videos-videos')
->method('POST')
->files('true')
->action(URL::to('user/videos/videos'))!!}
@include('videos::user.videos.partial.entry')
{!! Former::close() !!}