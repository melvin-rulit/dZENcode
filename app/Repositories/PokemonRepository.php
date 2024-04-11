<?php

namespace App\Repositories;

use App\Models\Application;
use App\Models\Performance;
use App\Repositories\Interfaces\PokemonRepositoryInterface;

class PokemonRepository implements PokemonRepositoryInterface
{

    public function all()
    {
        return Performance::all();
    }

    public function find($id)
    {
        return Performance::find($id);
    }

    public function update($DTO)
    {
//        return Performance::find();
        $model = new Performance();
        $model->title = $DTO->title;
        $model->code = $DTO->code;
        $model->unit_of_measure = $DTO->unit_of_measure;
        $model->period_start = $DTO->period_start;
        $model->period_end = $DTO->period_end;
        $model->actual_indicator = $DTO->actual_indicator;
        $model->amount_indicator = $DTO->amount_indicator;
        $model->save();

    }

}
