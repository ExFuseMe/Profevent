<?php

namespace App\Http\Repositories;

use App\Models\Event as Model;

class EventRepository extends BasicRepository
{

    protected function getModelClass(): string
    {
        return Model::class;
    }

    public function initRelations()
    {
        return [
            'managers',
            'participants',
        ];
    }

    public function all(int $perPage = 10, $columns = ['*'])
    {
        return $this->startConditions()
            ->select($columns)
            ->orderByDesc('created_at')
            ->with($this->initRelations())
            ->paginate($perPage);
    }

    public function find($id)
    {
        return $this->startConditions()->find($id)
            ->load($this->initRelations());
    }
}
