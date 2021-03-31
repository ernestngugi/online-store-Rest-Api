<?php
namespace App\Controller\Api\v1;

use App\Controller\AppController;
use Cake\Event\Event;

class ItemsController extends AppController
{
    
    public function index() {
        
        if ($this->request->is('json')) {
            $category = $this->Items->find()->select(['ItemCategoryCode','ItemCategoryName']);
            $this->set([
                'data' => $category,
                '_serialize' => ['data']
            ]);
        }
    }
    
    public function view ($id = null) {
        if ($this->request->is('json')) {
            $rstTblitems = $this->Items->findByItemcategorycode($id)->firstOrFail();
            $this->set([
                'data' => $rstTblitems,
                '_serialize' => ['data']
            ]);
            //$this->set(compact('rstTblitems'));
        }
    }
}