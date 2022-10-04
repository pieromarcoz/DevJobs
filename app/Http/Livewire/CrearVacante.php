<?php

namespace App\Http\Livewire;

use App\Models\Salario;
use Livewire\Component;
use App\Models\Categoria;
use App\Models\Vacante;
use Livewire\WithFileUploads;

class CrearVacante extends Component
{
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required|string',
        'salario' => 'required',
        'categoria' => 'required',
        'empresa' => 'required',
        'ultimo_dia' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required|image|max:1024',
    ];

    public function crearVacante(){
        $datos = $this->validate();

        // Almacenar la imagen
        $imagen = $this->imagen->store('public/vacantes');
        $datos['imagen'] = str_replace('public/vacantes/', '', $imagen);
        // dd($nombre_imagen);

        // Crear la Vacante
        Vacante::create([
            'titulo' => $datos['titulo'],
            'salario_id' => $datos['salario'],
            'empresa' => $datos['empresa'],
            'categoria_id' => $datos['categoria'],
            'ultimo_dia' => $datos['ultimo_dia'],
            'descripcion' => $datos['descripcion'],
            'imagen' => $datos['imagen'],
            'user_id' => auth()->user()->id,
        ]);

        // Crear un mensaje
        session()->flash('mensaje', 'La Vacante se público correctamente');

        // Dedireccionar al usuario
        return redirect()->route('vacantes.index');
    }

    public function render()
    {
        // Consultar DB
        $salarios = Salario::all();
        $categorias = Categoria::all();
        return view('livewire.crear-vacante', [
            'salarios' => $salarios, 
            'categorias' => $categorias
        ]);
    }
}
