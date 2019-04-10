<?php

namespace Lavalite\Videos\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Lavalite\Filer\FilerTrait;

class Videos extends Model
{
    use FilerTrait, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * Initialiaze page modal.
     *
     * @param $name
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Initialize the modal variables.
     *
     * @return void
     */
    public function initialize()
    {
        $this->fillable = config('videos.videos.fillable');
        $this->uploads = config('videos.videos.uploadable');
        $this->uploadRootFolder = config('videos.videos.upload_root_folder');
        $this->table = config('videos.videos.table');
    }
}
