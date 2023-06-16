<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comics = Comic::All();

        // dd($comics);

        return view('pages.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.comics.create');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request->validate(
            [
                'title' => 'required|unique:comics|max:50',
                'description' => 'required',
                'thumb' => 'required',
                'price' => 'required|max:10',
                'series' => 'required|max:100',
                'sale_date' => 'required|max:10',
                'type' => 'required|max:50',
                'artists' => 'required',
                'writers' => 'required'
            ],
            [
                'title.required' => 'Il campo Titolo è richiesto',
                'title.unique' => 'Il campo Titolo deve eseere univoco e quello che hai scelto è già presente',
                'title.max' => 'Il campo Titolo non deve superare i 50 caratteri',
                'description.required' => 'Il campo Descrizione è richiesto',
                'thumb.required' => 'Il campo Url immagine è richiesto',
                'price.required' => 'Il campo Prezzo è richiesto',
                'series.required' => 'Il campo Serie è richiesto',
                'sale_date.required' => 'Il campo Data Rilascio è richiesto',
                'type.required' => 'Il campo Tipologia è richiesto',
                'artists.required' => 'Il campo Artisti è richiesto',
                'writers.required' => 'Il campo Scrittori è richiesto',
            ]
        );
        
        // associamo a una variabile i dati passati con il form        
        $form_data = $request->all();

        $newComic = new Comic();

        $newComic->fill($form_data);
        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('pages.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('pages.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // validation
        $request->validate(
            [
                'title' => 'required|max:50',
                'description' => 'required',
                'thumb' => 'required',
                'price' => 'required|max:10',
                'series' => 'required|max:100',
                'sale_date' => 'required|max:10',
                'type' => 'required|max:50',
                'artists' => 'required',
                'writers' => 'required'
            ],
            [
                'title.required' => 'Il campo Titolo è richiesto',
                'title.max' => 'Il campo Titolo non deve superare i 50 caratteri',
                'description.required' => 'Il campo Descrizione è richiesto',
                'thumb.required' => 'Il campo Url immagine è richiesto',
                'price.required' => 'Il campo Prezzo è richiesto',
                'series.required' => 'Il campo Serie è richiesto',
                'sale_date.required' => 'Il campo Data Rilascio è richiesto',
                'type.required' => 'Il campo Tipologia è richiesto',
                'artists.required' => 'Il campo Artisti è richiesto',
                'writers.required' => 'Il campo Scrittori è richiesto',
            ]
        );

        // associamo a una variabile i dati passati con il form
        $form_data = $request->all();

        // aggiorniamo l'elemento passato con il form, usando il metodo update()
        $comic->update($form_data);

        // facciamo un redirect verso la pagina contenente tutti i nostri comic dove possiamo avere una panoramica dei nostri elementi modificati
        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        // cancelliamo l'elemento passato con il metodo destroy
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
