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
        return view('livewire.search-bar');
    }
}
