<?php

namespace Lavalite\Videos\Http\Controllers;

use App\Http\Controllers\PublicController as CMSPublicController;
use Lavalite\Videos\Interfaces\VideosRepositoryInterface;

class VideosPublicController extends CMSPublicController
{
    /**
     * Constructor.
     *
     * @param type \Lavalite\Videos\Interfaces\VideosRepositoryInterface $videos
     *
     * @return type
     */
    public function __construct(VideosRepositoryInterface $videos)
    {
        $this->model = $videos;
        parent::__construct();
    }

    /**
     * Show videos's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $videos = $this->model->all();

        return $this->theme->of('videos::public.videos.index', compact('videos'))->render();
    }

    /**
     * Show videos.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $videos = $this->model->findBySlug($slug);

        return $this->theme->of('videos::public.videos.show', compact('videos'))->render();
    }
}
