<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoiTuong extends Model
{
    protected $table = 'doituong';
    protected $primaryKey = 'id_doi_tuong';

    public function LoaiDoiTuong() {
        return $this->belongsTo('App\LoaiDoiTuong', 'id_loai_doi_tuong', 'id_loai_doi_tuong');
    }

    public function Videos() {
        return $this->hasMany('\App\Video', 'id_doi_tuong', 'id_doi_tuong');
    }
}
