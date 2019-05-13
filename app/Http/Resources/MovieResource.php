<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'judul' => $this->judul,
            'genre' => $this->genre,
            'sinopsis' => $this->sinopsis,
            'pemain' => $this->pemain,
            'produser' => $this->produser,
            'sutradara' => $this->sutradara,
            'penulis' => $this->penulis,
            'produksi' => $this->produksi,
            'poster' => $this->poster,
            'trailer' => $this->trailer,
            'umur' => $this->umur,
            'rating' => $this->rating,
            'durasi' => $this->durasi,
            'jadwal' => $this->jadwal
        ];
    }
}
