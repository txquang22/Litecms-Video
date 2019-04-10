<?php

namespace Lavalite\Videos\Http\Requests;

use App\Http\Requests\Request;
use User;

class VideosAdminRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(\Illuminate\Http\Request $request)
    {
        // Determine if the user is authorized to create an entry,
        if ($request->isMethod('POST') || $request->is('*/create')) {
            return User::can('videos.videos.create');
        }

        // Determine if the user is authorized to update an entry,
        if ($request->isMethod('PUT') || $request->isMethod('PATCH') || $request->is('*/edit')) {
            return User::can('videos.videos.edit');
        }

        // Determine if the user is authorized to delete an entry,
        if ($request->isMethod('DELETE')) {
            return User::can('videos.videos.delete');
        }

        // Determine if the user is authorized to view the module.
        return User::can('videos.videos.view');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(\Illuminate\Http\Request $request)
    {
        // validation rule for create request.
        if ($request->isMethod('POST')) {
            return [
                'v_id'                => 'required',
                'name'                => 'required',
                'status'              => 'required',
                'view_count'          => 'required',
                'duration'            => 'required',
                'file'                => 'required',
                'uploaded_by'         => 'required',
            ];
        }

        // Validation rule for update request.
        if ($request->isMethod('PUT') || $request->isMethod('PATCH')) {
            return [
                'v_id'                => 'required',
                'name'                => 'required',
                'status'              => 'required',
                'view_count'          => 'required',
                'duration'            => 'required',
                'file'                => 'required',
                'uploaded_by'         => 'required',
            ];
        }

        // Default validation rule.
        return [

        ];
    }
}
