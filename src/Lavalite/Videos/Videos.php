<?php

namespace Lavalite\Videos;

class Videos
{
    /**
     * $videos object.
     */
    protected $videos;

    /**
     * Constructor.
     */
    public function __construct(\Lavalite\Videos\Interfaces\VideosRepositoryInterface $videos)
    {
        $this->videos = $videos;
    }

    /**
     * Returns count of videos.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count()
    {
        return  0;
    }
}
