<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'video';
    protected $primaryKey = 'id_video';

    public function DoiTuong()
    {
        return $this->belongsTo('App\DoiTuong', 'id_doi_tuong', 'id_doi_tuong');
    }

    public function DoiTuongXuatHiens()
    {
        return \App\DoiTuongXuatHien::where('id_video', $this->id_video)->get();
    }
}
