<?php

namespace Lavalite\Videos\Http\Controllers;

use App\Http\Controllers\UserController as UserController;
use Former;
use Lavalite\Videos\Http\Requests\VideosUserRequest;
use Lavalite\Videos\Interfaces\VideosRepositoryInterface;
use Response;
use User;

class VideosUserController extends UserController
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
        $this->model->setUserFilter();
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(VideosUserRequest $request)
    {
        $videos = $this->model->all();

        $this->theme->prependTitle(trans('videos::videos.names').' :: ');

        return $this->theme->of('videos::user.videos.index', compact('videos'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function show(VideosUserRequest $request, $role, $id)
    {
        $videos = $this->model->find($id);

        return $this->theme->of('videos::user.videos.show', compact('videos'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(VideosUserRequest $request)
    {
        $videos = $this->model->findOrNew(0);

        Former::populate($videos);

        return $this->theme->of('videos::user.videos.create', compact('videos'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(VideosUserRequest $request)
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
    public function edit(VideosUserRequest $request, $role, $id)
    {
        $videos = $this->model->find($id);

        Former::populate($videos);

        return $this->theme->of('videos::user.videos.edit', compact('videos'))->render();
    }

    /**
     * Update the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(VideosUserRequest $request, $role, $id)
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
    public function destroy(VideosUserRequest $request, $role, $id)
    {
        try {
            $this->model->delete($id);

            return $this->success(trans('message.success.deleted', ['Module' => trans('videos::videos.name')]), 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}
