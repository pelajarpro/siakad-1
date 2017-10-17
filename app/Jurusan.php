<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;

class Jurusan extends Model
{
    use Sortable;

    protected $fillable =['kode_jurusan','nama_jurusan','jenjang','jumlah_semester','id_fakultas'];
    protected $table ='jurusan';

    public $sortable = ['kode_jurusan','nama_jurusan','jenjang','jumlah_semester'];

    public function mahasiswa()
    {
    	return $this->belongsTo('App\Mahasiswa');
    }

    public function fakultas()
    {
    	return $this->hasMany('App\Fakultas');
    }
}
