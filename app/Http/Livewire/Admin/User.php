<?php

namespace App\Http\Livewire\Admin;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{
    public $users, $limit = 4, $detailId = false;
    public $userDetail;

    public function mount()
    {
        $this->users = ModelsUser::orderBy('id')->limit($this->limit)->get();
    }
    public function render()
    {
        $user = $this->users;
        return view('livewire.admin.user', [
            'users' => $user
        ])->extends('layouts.admin')->section('content');
    }
    public function loadMore()
    {
        $this->limit += 4;
        $this->users = ModelsUser::orderBy('id')->limit($this->limit)->get();
    }
    public function detailUser($id)
    {
        if ($this->detailId) {
            $this->detailId =  false;
        } else {
            $this->detailId = true;

            $this->userDetail = ModelsUser::find($id);
        }
    }

    public function setAdmin()
    {
        $this->userDetail->role = 'admin';
        $this->userDetail->save();
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Berhasil Set Admin',
            'timer' => 3000,
            'icon' => 'success',
            'toast' => true,
            'showConfirmButton' => false,
            'position' => 'top-right'
        ]);
    }
    public function hapus()
    {
        $this->userDetail->delete();
        $this->detailId = 0;
        $this->users = ModelsUser::orderBy('id')->limit($this->limit)->get();
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Hapus User Berhasil',
            'timer' => 3000,
            'icon' => 'success',
            'toast' => true,
            'showConfirmButton' => false,
            'position' => 'top-right'
        ]);
    }
}
