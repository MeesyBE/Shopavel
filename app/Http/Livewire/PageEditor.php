<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pages\PageEntity;
use App\Models\Pages\PageContent;

class PageEditor extends Component
{
    public $pageid;
    // public $page;
    public $pageContentHtmlTemp = '';
    public $pageContentStyleTemp = '';

    protected $listeners = [
        'set:pageContentHtmlTemp' => 'pageContentHtmlTemp',
        'set:pageContentStyleTemp' => 'pageContentStyleTemp',
    ];

    public function mount($page, $id)
    {
       // $this->page = PageEntity::find($id);
       // $this->page = PageEntity::with('content')->find($id);
       $this->pageid = $id;
    }

    public function pageContentHtmlTemp($pageContentHtmlTemp){
      $this->pageContentHtmlTemp = $pageContentHtmlTemp;
    }

    public function pageContentStyleTemp($pageContentStyleTemp){
      $this->pageContentStyleTemp = $pageContentStyleTemp;
    }

    public function updateContentPage()
    {
      if (!empty($this->pageContentHtmlTemp) && !empty($this->pageContentStyleTemp)) {
        $pageContent = PageContent::where('page_id', '=', $this->pageid)->first();
        if(isset($pageContent->page_id)){
          $pageContent->page_content = $this->pageContentHtmlTemp;
          $pageContent->page_style = $this->pageContentStyleTemp;
          $pageContent->save();
        }else{
          $pageContent = new PageContent;
          $pageContent->page_id = $this->pageid;
          $pageContent->page_content = $this->pageContentHtmlTemp;
          $pageContent->page_style = $this->pageContentStyleTemp;
          $pageContent->save();
        }
      }
    }

    public function render()
    {
        return view('livewire.page-editor');
    }
}
