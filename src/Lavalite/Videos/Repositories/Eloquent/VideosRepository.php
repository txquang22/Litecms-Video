<?php

namespace Lavalite\Videos\Repositories\Eloquent;

use Lavalite\Videos\Interfaces\VideosRepositoryInterface;

class VideosRepository extends BaseRepository implements VideosRepositoryInterface
{
    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('videos.videos.model');
    }
}
