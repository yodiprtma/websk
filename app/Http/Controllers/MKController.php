<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MKController extends Controller
{
    private $matkul = [
        [
            'ID' => "MK123456",
            'MK' => "Web Programing",
            'jurusan' => "TI",
        ],
        [
            'ID' => "MK123457",
            'MK' => "OOP",
            'jurusan' => "TI",
        ],
        [
            'ID' => "MK123458",
            'MK' => "Net Work",
            'jurusan' => "TI",
        ],
        [
            'ID' => "MK123459",
            'MK' => "System C",
            'jurusan' => "TI",
        ],
    ];

        public function index()
        {
            return view('MK.index', ['matkul' => $this->matkul]);
        }
    
        public function create()
        {
            return view('MK.create');
        }
    
        public function edit($id)
        {
            return view('MK.edit', ['matkul' => $this->matkul[$id], 'id' => $id]);
        }
    
        public function show($id)
        {
        }
    }






    