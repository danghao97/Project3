<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoiTuongXuatHien extends Model
{
    protected $table = 'doituongxuathien';
    protected $primaryKey = 'id';

    public function DoiTuong()
    {
        return $this->belongsTo('App\DoiTuong', 'id_doi_tuong', 'id_doi_tuong');
    }
}
