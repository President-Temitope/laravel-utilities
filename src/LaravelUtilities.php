<?php

namespace Callmehalpha\LaravelUtilities;

trait LaravelUtilities
{
    public function all($model)
    {
        // TODO: Implement all() method.
        return $model::all();
    }

    public function create($model, array $data)
    {
        // TODO: Implement create() method.
        return $model::create($data);
    }

    public function update($model, $id, array $data)
    {
        // TODO: Implement update() method.
        return $model::where('id', $id)->update($data);
    }

    public function delete($model, $id)
    {
        // TODO: Implement delete() method.
        return $model::where('id', $id)->delete();
    }

    /**
     * @param $condition , holds the db field
     * @param $query , hold the query value
     * @param $model
     * @return mixed
     */
    public function queryWithACondition($condition, $query, $model,array $with){
        return $model::with($with)->where($condition, $query)->simplePaginate(25);
    }

    public function show($model, $id)
    {
        // TODO: Implement show() method.
        return $model::where('id', $id)->get();
    }

    public function findTheFirstOne($condition, $query, $model,array $with)
    {
        return $model::with($with)->where($condition, $query)->first();
    }

    /**
     * Dynamic datatable
     */
    public function datatable($data,array $actions){
        /*return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);*/

    }

}
