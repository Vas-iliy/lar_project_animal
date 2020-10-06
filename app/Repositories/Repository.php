<?php


namespace App\Repositories;


class Repository
{
    protected $model;

    public function get($select, $take = false, $pagination = false, $where = false, $order = false)
    {
        $builder = $this->model->select($select);

        if ($take) {
            $builder->take($take);
        }

        if ($where && is_array($where)) {
            $builder->where($where[0], $where[1]);
        }

        if ($order && is_array($order)) {
            $builder->orderBy($order[0], $order[1]);
        }
        /*if ($pagination) {
            $builder->paginate(6);
        }*/

        return $builder->get();
    }

}
