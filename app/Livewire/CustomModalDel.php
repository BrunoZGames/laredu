<?php

namespace App\Livewire;

use Livewire\Component;

class CustomModalDel extends Component
{   
    public $showingModal;
    public $itemId; // Property to store the ID

    protected $listeners = ['openModal'];

    public function mount() {
        $this->showingModal = false;
    }
    

    public function openModal($itemId)
    {
        $this->itemId = $itemId; // Set the ID
        $this->showModal(); // Open the modal
    }

    public function showModal()
    {
        $this->showingModal = true;
    }

    public function hideModal()
    {
        $this->showingModal = false;
    }

    public function render()
    {
        return view('livewire.custom-modal-del');
    }
}
