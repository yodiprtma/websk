<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MKController extends Controller
{
    private $data = [
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
            return view('mahasiswa.index', ['data' => $this->data]);
        }
    
        public function create()
        {
            return view('mahasiswa.create');
        }
    
        public function edit($id)
        {
            return view('mahasiswa.edit', ['data' => $this->data[$id], 'id' => $id]);
        }
    
        public function show($id)
        {
        }
    }