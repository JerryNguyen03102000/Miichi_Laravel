<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance.blade.php mode is enabled.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
