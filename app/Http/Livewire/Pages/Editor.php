<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Pages\PageEntity;
use App\Models\Pages\PageContent;

class Editor extends Component
{
    public $pageid;
    // public $page;
    public $pageContentHtmlTemp = '';
    public $pageContentStyleTemp = '';
    public $showPageSettings = false;
    public $page = [];

    protected $listeners = [
        'set:pageContentHtmlTemp' => 'pageContentHtmlTemp',
        'set:pageContentStyleTemp' => 'pageContentStyleTemp',
    ];

    public function mount($page, $id)
    {
       // $this->page = PageEntity::find($id);
       // $this->page = PageEntity::with('content')->find($id);
       $this->pageid = $id;
       $this->page = $page;
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
        if(!isset($pageContent->page_id)){
          $pageContent = new PageContent;
          $pageContent->page_id = $this->pageid;
        }

        $pageContent->page_content = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $this->pageContentHtmlTemp);
        preg_match_all('/\<script(.*?)?\>(.|\s)*?\<\/script\>/i', $this->pageContentHtmlTemp, $scripts);
        $pageContent->page_script = json_encode($scripts ?? "");

        $pageContent->page_style = $this->pageContentStyleTemp;
        $pageContent->save();
      }
    }

    public function pageSettings()
    {
      $this->showPageSettings = true;
    }

    public function render()
    {
        return view('livewire.pages.editor');
    }


}
