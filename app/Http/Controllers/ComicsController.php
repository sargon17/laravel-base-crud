<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        $nav = config("nav");
        $footerNav = config("footerNav");
        $social = config("social");
        $bannerData = config("bannerData");
        return view(
            "comics.index",
            compact(["comics", "nav", "footerNav", "social", "bannerData"])
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nav = config("nav");
        $footerNav = config("footerNav");
        $social = config("social");
        return view("comics.create", compact(["nav", "footerNav", "social"]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $comic = new Comic();
        $comic->title = $data["title"] ?? "";
        $comic->description = $data["description"] ?? "";
        $comic->image = $data["image"] ?? null;
        $comic->price = $data["price"];
        $comic->series = $data["series"] ? $data["series"] : "";
        $comic->sale_date = $data["sale_date"] ?? null;
        $comic->save();

        return redirect()->route("comics.show", ["comic" => $comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Comic $comic)
    {
        $nav = config("nav");
        $footerNav = config("footerNav");
        $social = config("social");
        $bannerData = config("bannerData");
        return view(
            "comics.show",
            compact(["comic", "nav", "footerNav", "social", "bannerData"])
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
