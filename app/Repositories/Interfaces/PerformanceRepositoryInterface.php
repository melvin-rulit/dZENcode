<?php

namespace App\Repositories\Interfaces;

interface PerformanceRepositoryInterface
{
    public function all();

    public function find($id);

    public function update($DTO);
}
