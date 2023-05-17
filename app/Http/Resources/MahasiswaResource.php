<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'nim'=>$this->nim,
            'nama'=>$this->nama,
            'tanggal_lahir'=>$this->tanggal_lahir,
            'foto'=>$this->foto,
            'kelas_id'=>$this->kelas_id,
            'no_handphone'=>$this->no_handphone,
            'email'=>$this->email,
            'jurusan'=>strtoupper($this->jurusan)
        ];
    }
}
