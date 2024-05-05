<?php

namespace App\Livewire;

use App\Models\purchase_request;
use App\Models\PurchaseRequest;
use App\Models\User;
use Livewire\Component;

class SearchBar extends Component
{
    public $search = "";

    public function render()
    {
        $results = [];

        if (strlen($this->search) >= 1) {
            $results = purchase_request::where('status', 'like', '%' . $this->search . '%')->limit(7)->get();
        }


        return view('livewire.search-bar', [
            'users' => $results
        ]);
    }
}
