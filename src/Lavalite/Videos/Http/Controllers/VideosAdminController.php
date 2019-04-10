<?php

namespace Lavalite\Videos\Http\Controllers;

use App\Http\Controllers\AdminController as AdminController;
use Former;
use Lavalite\Videos\Http\Requests\VideosAdminRequest;
use Lavalite\Videos\Interfaces\VideosRepositoryInterface;
use Response;

/**
 * Admin controller class.
 */
class VideosAdminController extends AdminController
{
    /**
     * Initialize videos controller.
     *
     * @param type VideosRepositoryInterface $videos
     *
     * @return type
     */
    public function __construct(VideosRepositoryInterface $videos)
    {
        $this->model = $videos;
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(VideosAdminRequest $request)
    {
        if ($request->wantsJson()) {
            $array = $this->model->json();
            foreach ($array as $key => $row) {
                $array[$key] = array_only($row, config('videos.videos.listfields'));
            }

            return ['data' => $array];
        }

        $this->theme->prependTitle(trans('videos::videos.names').' :: ');

        return $this->theme->of('videos::admin.videos.index')->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function show(VideosAdminRequest $request, $id)
    {
        $videos = $this->model->find($id);

        if (empty($videos)) {
            if ($request->wantsJson()) {
                return [];
            }

            return view('videos::admin.videos.new');
        }

        if ($request->wantsJson()) {
            return $videos;
        }

        Former::populate($videos);

        return view('videos::admin.videos.show', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(VideosAdminRequest $request)
    {
        $videos = $this->model->findOrNew(0);
        Former::populate($videos);

        return view('videos::admin.videos.create', compact('videos'));
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(VideosAdminRequest $request)
    {
        try {
            $attributes = $request->all();
            $videos = $this->model->create($attributes);

            return $this->success(trans('messages.success.created', ['Module' => trans('videos::videos.name')]));
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function edit(VideosAdminRequest $request, $id)
    {
        $videos = $this->model->find($id);

        Former::populate($videos);

        return view('videos::admin.videos.edit', compact('videos'));
    }

    /**
     * Update the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(VideosAdminRequest $request, $id)
    {
        try {
            $attributes = $request->all();
            $videos = $this->model->update($attributes, $id);

            return $this->success(trans('messages.success.updated', ['Module' => trans('videos::videos.name')]));
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * Remove the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy(VideosAdminRequest $request, $id)
    {
        try {
            $this->model->delete($id);

            return $this->success(trans('message.success.deleted', ['Module' => trans('videos::videos.name')]), 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}
