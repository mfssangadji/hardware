<?php

namespace App;
use Cohensive\Embed\Facades\Embed;
use Illuminate\Database\Eloquent\Model;

class Elearning extends Model
{
    public function getVlinkHtmlAttribute()
    {
        $embed = Embed::make($this->vlink)->parseUrl();

        if (!$embed)
            return '';

        $embed->setAttribute(['width' => 300]);
        return $embed->getHtml();
    }

    protected $table = 'elearning';
    protected $fillable = [
    	'kategori_id',
    	'judul',
        'deskripsi',
    	'gambar',
    	'vlink',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
