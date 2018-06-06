<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiDoiTuong extends Model
{
    protected $table = 'loaidoituong';
    protected $primaryKey = 'id_loai_doi_tuong';

    public function CapDo()
    {
        return $this->belongsTo('App\CapDo', 'id_cap_do', 'id_cap_do');
    }
}
