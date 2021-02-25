<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageEntity;
use App\Models\PageContent;

class PageEditor extends Component
{
    public $pageContentArray = ['items' => []];
    public $pageContentJson = '';
    public $page;

    public function mount()
    {
       // $this->page = PageEntity::find($id);

       $this->pageContentArrayToJson();
    }

    public function addDiv()
    {

       $defaultArray = ['item' => ['type' => 'div', 'name' => 'div', 'classes' => '', 'children' => []]];
       $this->pageContentArray['items'][] = [];
       $this->pageContentArray['items'][] = $defaultArray;
       $this->pageContentArrayToJson();
    }

    public function pageContentArrayToJson()
    {
        $this->pageContentJson = json_encode($this->pageContentArray);
    }

    public function render()
    {
        return view('livewire.page-editor');
    }
}
