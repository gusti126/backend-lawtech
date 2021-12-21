<?php

namespace App\Http\Livewire\Admin;

use App\Models\HukumKategori;
use Livewire\Component;
use Livewire\WithFileUploads;

class LivewireKategori extends Component
{
    use WithFileUploads;

    public $nama, $image;
    public $kategoriId = 0;
    public $isHapus = false, $hapusId = 0;
    public $isTambah = false;

    protected $listeners = [
        'newCreate'
    ];

    public function newCreate()
    {
        $kategori = HukumKategori::orderBy('id', 'desc')->get();
    }

    protected $rules = [
        'image' => 'required|image|max:2024', // 2MB Max
        'nama' => 'required'
    ];

    protected $messages = [
        'max' => ':attribute tidak boleh lebih dari 2mb',
        'required' => ':attribute harus di isi'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $kategori = HukumKategori::orderBy('id', 'desc')->get();

        return view('livewire.admin.livewire-kategori', [
            'kategoris' => $kategori
        ])->extends('layouts.admin')->section('content');
    }

    public function detail($id)
    {
        $this->kategoriId = $id;
    }

    public function confirmTambah()
    {
        if ($this->isTambah) {
            $this->isTambah = false;
        } else {
            $this->isTambah = true;
        }
    }

    public function tambah()
    {
        $this->validate();

        $image = $this->image->store('kategori', 'public');

        $kategori = HukumKategori::create([
            'nama' => $this->nama,
            'image' => $image,
        ]);

        $this->image = null;
        $this->nama = '';

        $this->isTambah = false;

        $this->emit('newCreate');

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Berhasil Hapus',
            'timer' => 3000,
            'icon' => 'success',
            'toast' => true,
            'showConfirmButton' => false,
            'position' => 'top-right'
        ]);
    }

    public function edit()
    {
        $this->validate([
            'image' => 'image|max:1024', // 1MB Max
        ]);

        $data = HukumKategori::find($this->kategoriId);

        $image = $this->image->store('kategori');

        $data->image = $image;
        $data->save();
    }

    public function confirmHapus($id)
    {
        if ($this->isHapus) {
            $this->isHapus = false;
            $this->hapusId = 0;
            dd($this->hapusId);
        } else {
            $this->isHapus = true;
            $this->hapusId = $id;
        }
    }

    public function hapus($id)
    {
        if (!$this->isHapus) {
            return  $this->isHapus = false;
        }

        $kategori = HukumKategori::find($id);
        $kategori->delete();

        $this->isHapus = false;

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Berhasil Hapus',
            'timer' => 3000,
            'icon' => 'success',
            'toast' => true,
            'showConfirmButton' => false,
            'position' => 'top-right'
        ]);
    }
}
