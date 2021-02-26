<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageEntity;
use App\Models\PageContent;

class PageEditor extends Component
{
    public $pageContentArray = ['items' => []];
    public $pageContentJson = '';
    public $sidebarIems = ['1', '2', '3'];
    public $itemCount = 0;
    public $page;

    public function mount()
    {
       // $this->page = PageEntity::find($id);

       $this->pageContentArrayToJson();
    }

    public function addDiv()
    {
       $defaultArray = ['item' => ['index' => $this->itemCount, 'type' => 'div', 'name' => 'Div', 'classes' => '', 'children' => []]];
       $this->pageContentArray['items'][] = $defaultArray;
       $this->pageContentArrayToJson();
       $this->itemCount++;
    }

    public function addText()
    {
       $defaultArray = ['item' => ['index' => $this->itemCount, 'type' => 'text', 'name' => 'Text', 'classes' => '', 'children' => []]];
       $this->pageContentArray['items'][] = $defaultArray;
       $this->pageContentArrayToJson();
       $this->itemCount++;
    }


    public function addButton()
    {
       $defaultArray = ['item' => ['index' => $this->itemCount, 'type' => 'button', 'name' => 'Button', 'classes' => '', 'children' => []]];
       $this->pageContentArray['items'][] = $defaultArray;
       $this->pageContentArrayToJson();
       $this->itemCount++;
    }


    public function updateItemOrder($orderedIds)
    {
      // dd($orderedIds);
      $new_order = [];
      // dd($this->pageContentArray);
      if (count($orderedIds) > 0) {
        foreach ($orderedIds as $key => $order) {
          // dd($this->pageContentArray['items']);
            $id = '';
            $id = intval($order['value']);
            $new_order[$key] = $this->pageContentArray['items'][$id];
            $new_order[$key]['item']['index'] = $key;
        }
        $this->pageContentArray['items'] = [];
        $this->pageContentArray['items'] = $new_order;
      } else {
      }
      $this->pageContentArrayToJson();
      // dd($this->pageContentJson);
    }


    public function pageContentArrayToJson()
    {
        return $this->pageContentJson = json_encode($this->pageContentArray);
    }

    public function render()
    {
        return view('livewire.page-editor');
    }
}
