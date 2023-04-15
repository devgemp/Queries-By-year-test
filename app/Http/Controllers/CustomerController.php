<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        # Solucion con PostgreSQL
        // $registrosPorMes = TuModelo::select(
        //     DB::raw('DATE_TRUNC("month", Fecha) as Mes'),
        //     DB::raw('SUM(Importe) as Total')
        // )
        // ->groupBy('Mes')
        // ->orderBy('Mes')
        // ->get();

        # Solución con MySQL
        // $registrosPorMes = \App\Models\Customer::select(
        //         DB::raw('DATE_FORMAT(FECHA, "%Y-%m") as Mes'),
        //         DB::raw('COUNT(*) as contactos')
        //     )
        //     ->groupBy('Mes')
        //     ->orderBy('Mes')
        //     ->get()
        // ;

        # Solución con SQLite
        $registrosPorMes = \App\Models\Customer::select(
                DB::raw('strftime("%Y-%m", Fecha) as Mes'),
                DB::raw('COUNT(*) as contactos')
            )
            ->groupBy('Mes')
            ->orderBy('Mes')
            ->get()
        ;

        return $registrosPorMes;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
