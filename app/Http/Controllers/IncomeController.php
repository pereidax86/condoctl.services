<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index()
    {
        // Listar todos los ingresos
        $incomes = Income::with('user')->get();
        return view('incomes.index', compact('incomes'));
    }

    public function create()
    {
        // Mostrar el formulario para crear un nuevo ingreso
        return view('incomes.create');
    }

    public function store(Request $request)
    {
        // Validar los datos
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
        ]);

        // Crear el ingreso
        $income = new Income($validated);
        $income->user_id = auth()->id(); // Asignar el ingreso al usuario autenticado
        $income->save();

        // Redirigir a la lista de ingresos con un mensaje de éxito
        return redirect()->route('incomes.index')->with('success', 'Income created successfully.');
    }

    public function edit(Income $income)
    {
        // Mostrar el formulario para editar un ingreso existente
        return view('incomes.edit', compact('income'));
    }

    public function update(Request $request, Income $income)
    {
        // Validar los datos
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
        ]);

        // Actualizar el ingreso
        $income->update($validated);

        // Redirigir a la lista de ingresos con un mensaje de éxito
        return redirect()->route('incomes.index')->with('success', 'Income updated successfully.');
    }

    public function destroy(Request $request, Income $income)
    {
        // Validar la razón de eliminación
        $validated = $request->validate([
            'reason' => 'required|string|max:255',
        ]);
    
        // Guardar todos los datos del ingreso en la tabla de auditoría
        \DB::table('income_deletions')->insert([
            'income_id' => $income->id,
            'description' => $income->description,
            'amount' => $income->amount,
            'date' => $income->date,
            'deleted_by' => auth()->id(),
            'reason' => $validated['reason'],
            'deleted_at' => now(),
        ]);
    
        // Eliminar el ingreso
        $income->delete();
    
        // Redirigir a la lista de ingresos con un mensaje de éxito
        return redirect()->route('incomes.index')->with('success', 'Income deleted successfully.');
    }
    
    
}
