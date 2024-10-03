<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        // Listar todos los egresos
        $expenses = Expense::with('user')->get();
        return view('expenses.index', compact('expenses'));
    }

    public function create()
    {
        // Mostrar el formulario para crear un nuevo egreso
        return view('expenses.create');
    }

    public function store(Request $request)
    {
        // Validar los datos
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
        ]);

        // Crear el egreso
        $expense = new Expense($validated);
        $expense->user_id = auth()->id(); // Asignar el egreso al usuario autenticado
        $expense->save();

        // Redirigir a la lista de egresos con un mensaje de éxito
        return redirect()->route('expenses.index')->with('success', 'Expense created successfully.');
    }

    public function edit(Expense $expense)
    {
        // Mostrar el formulario para editar un egreso existente
        return view('expenses.edit', compact('expense'));
    }

    public function update(Request $request, Expense $expense)
    {
        // Validar los datos
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
        ]);

        // Actualizar el egreso
        $expense->update($validated);

        // Redirigir a la lista de egresos con un mensaje de éxito
        return redirect()->route('expenses.index')->with('success', 'Expense updated successfully.');
    }

    public function destroy(Request $request, Expense $expense)
    {
        // Validar la razón de eliminación
        $validated = $request->validate([
            'reason' => 'required|string|max:255',
        ]);
    
        // Guardar todos los datos del egreso en la tabla de auditoría
        \DB::table('expense_deletions')->insert([
            'expense_id' => $expense->id,
            'description' => $expense->description,
            'amount' => $expense->amount,
            'date' => $expense->date,
            'deleted_by' => auth()->id(),
            'reason' => $validated['reason'],
            'deleted_at' => now(),
        ]);
    
        // Eliminar el egreso
        $expense->delete();
    
        // Redirigir a la lista de egresos con un mensaje de éxito
        return redirect()->route('expenses.index')->with('success', 'Expense deleted successfully.');
    }
    
}
