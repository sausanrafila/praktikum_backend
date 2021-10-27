<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Animalcontroller extends Controller
{
    #buat property animals (array)
    public $animal = ['Kucing','Ikan','Ayam'];

    public function index(){
        #tampilkan data animal
        foreach($this->animal as $this->index){
            echo "$this->index <br>";
        }
    }

    public function store(Request $request){
        #menambah data hewan
        array_push($this->animal,$request->nama);
        $this->index();
    }

    public function update(Request $request,$id){
        #mengupdate data hewan
        $this->animal[$id] = $request->nama;
        $this->index();
    }
    public function destroy($id){
        #menghapus data hewan
        unset($this->animal[$id],$id);
        $this->index();
    }
}