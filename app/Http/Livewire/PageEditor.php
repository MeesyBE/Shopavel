<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageEntity;
use App\Models\PageContent;

class PageEditor extends Component
{
    public $pageContentArray = ['items' => []];
    public $pageContentJson = '';
    public $pageContentHtml = '';
    public $dropdownStates = [];
    public $itemCount = 0;
    public $addItem = false;
    public $newItemLevel = '0';
    public $newItemIndex = '0';

    public $page;

    public function mount()
    {
       // $this->page = PageEntity::find($id);

       $this->pageContentArrayToJson();
    }


    public function addDiv()
    {
       $defaultArray = ['item' => ['index' => $this->itemCount, 'type' => 'div', 'name' => 'Div', 'classes' => '', 'children' => []]];
       return $defaultArray;
    }

    public function addText()
    {
       $defaultArray = ['item' => ['index' => $this->itemCount, 'type' => 'text', 'name' => 'Text', 'classes' => '', 'children' => []]];
       return $defaultArray;

    }

    public function addButton()
    {
       $defaultArray = ['item' => ['index' => $this->itemCount, 'type' => 'button', 'name' => 'Button', 'classes' => '', 'children' => []]];
       return $defaultArray;

    }

    public function addItemToPage($function){
      // dd($function);
      $defaultArray = $this->$function();
      if ($this->newItemLevel == 0) {
        $this->pageContentArray['items'][] = $defaultArray;
        $this->dropdownStates['div'.$this->itemCount] = false;
        $this->pageContentArrayToJson();
        $this->renderView();
        $this->itemCount++;
      }else{
        $this->pageContentArray['items'] = $this->loopThroughItemsAndAdd($this->pageContentArray['items'], $defaultArray);
        $this->pageContentArrayToJson();
        $this->renderView();
      }


    }
    public function loopThroughLevels($defaultArray){
      // for ($i=0; $i < $this->newItemLevel; $i++) {
      //   if($i == 0){
      //     $levelArray = $this->loopThroughItemsAndAdd($this->pageContentArray['items'], $defaultArray);
      //   }else{
      //     $levelArray = $this->loopThroughItemsAndAdd($this->pageContentArray['items'], $defaultArray);
      //   }
      // }
    }

    public function loopThroughItemsAndAdd($items, $defaultArray){
      foreach ($items as $pageContentItems) {
        if (isset($pageContentItems['item']['index'])) {
          if (!empty($pageContentItems['item']['children'][0])){
            $pageContentItems['item']['children'] = $this->loopThroughItemsAndAdd($pageContentItems['item']['children'], $defaultArray);
          }
          if ($pageContentItems['item']['index'] == $this->newItemIndex) {
            $pageContentItems['item']['children'][] = $defaultArray;
          }
        }
        $newArray[] = $pageContentItems;
      }
      return $newArray;
    }

    public function addItem($level, $index){
        $this->addItem = true;
        $this->newItemLevel = $level;
        $this->newItemIndex = $index;

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
      $this->renderView();
      // dd($this->pageContentJson);
    }


    public function renderView(){

      $this->pageContentHtml = '';
      foreach ($this->pageContentArray['items'] as $key => $item) {
        if (isset($item['item'])) {
          switch ($item['item']['type']) {
            case 'div':
              $this->pageContentHtml .= '<div></div>';

              break;
            case 'text':
              $this->pageContentHtml .= '<h1></h1>';

              break;
            case 'button':
              $this->pageContentHtml .= '<button></button>';

              break;

            default:
              $this->pageContentHtml .= '<div></div>';

              break;
          }
        }


      }

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
