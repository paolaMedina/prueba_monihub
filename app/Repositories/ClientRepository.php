<?php

namespace App\Repositories;

use App\Models\Client;
use App\Repositories\BaseRepository;

class ClientRepository extends BaseRepository
{


    public function getModel()
    {
        return Client::query();
    }


    public function create(array $data)
    {
        $acount = $this->getModel()->create($data);
        return $acount;
    }

    public function show($id)
    {
        return $this->getModel()->findOrFail($id);
    }
}
