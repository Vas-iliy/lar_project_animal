<?php


namespace App\Repositories;


class Repository
{
    protected $model;

    public function get($select, $take = false, $pagination = false, $where = false)
    {
        $builder = $this->model->select($select);

        if ($take) {
            $builder->take($take);
        }

        if ($where && is_array($where)) {
            $builder->where($where[0], $where[1]);
        }

        if ($pagination) {
            $builder->paginate(6);
        }

        return $builder->get();
    }

}
