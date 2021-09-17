<?php

namespace App\Repositories;

use App\Models\Acount;
use App\Repositories\BaseRepository;

class AcountRepository extends BaseRepository
{

    public function getModel()
    {
        return Acount::query();
    }


    public function create(array $data)
    {
        $acount = $this->getModel()->create($data);
        return $acount;
    }

    public function list()
    {
        return $this->getModel()->with('holder')->get();
    }

    public function show($id)
    {
        return $this->getModel()->findOrFail($id);
    }

    public function editBalance($id, $amount)
    {
        $acount = $this->getModel()->findOrFail($id);
        $acount->balance = $amount;
        $acount->save();
        return $acount;
    }
}
