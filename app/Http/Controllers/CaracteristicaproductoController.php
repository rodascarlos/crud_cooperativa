<?php

namespace App\Http\Controllers;

use App\Models\Caracteristicaproducto;
use Illuminate\Http\Request;

/**
 * Class CaracteristicaproductoController
 * @package App\Http\Controllers
 */
class CaracteristicaproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caracteristicaproductos = Caracteristicaproducto::paginate();

        return view('caracteristicaproducto.index', compact('caracteristicaproductos'))
            ->with('i', (request()->input('page', 1) - 1) * $caracteristicaproductos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caracteristicaproducto = new Caracteristicaproducto();
        return view('caracteristicaproducto.create', compact('caracteristicaproducto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Caracteristicaproducto::$rules);

        $caracteristicaproducto = Caracteristicaproducto::create($request->all());

        return redirect()->route('caracteristicaproductos.index')
            ->with('success', 'Caracteristicaproducto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caracteristicaproducto = Caracteristicaproducto::find($id);

        return view('caracteristicaproducto.show', compact('caracteristicaproducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caracteristicaproducto = Caracteristicaproducto::find($id);

        return view('caracteristicaproducto.edit', compact('caracteristicaproducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Caracteristicaproducto $caracteristicaproducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caracteristicaproducto $caracteristicaproducto)
    {
        request()->validate(Caracteristicaproducto::$rules);

        $caracteristicaproducto->update($request->all());

        return redirect()->route('caracteristicaproductos.index')
            ->with('success', 'Caracteristicaproducto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caracteristicaproducto = Caracteristicaproducto::find($id)->delete();

        return redirect()->route('caracteristicaproductos.index')
            ->with('success', 'Caracteristicaproducto deleted successfully');
    }
}
