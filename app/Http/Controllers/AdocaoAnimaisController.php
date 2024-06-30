<?php

namespace App\Http\Controllers;

use App\Models\AsPatasAnimalModel;

class AdocaoAnimaisController extends Controller {
    public function index() {
        $aAnimais = AsPatasAnimalModel::all();
        return view('adocao', ['aAnimais' => $aAnimais]);
    }
}
