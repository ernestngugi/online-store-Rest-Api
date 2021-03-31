<?php
namespace App\Controller\Api\v1;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * RstTblitems Controller
 *
 * @property \App\Model\Table\RstTblitemsTable $RstTblitems
 *
 * @method \App\Model\Entity\RstTblitem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RstTblitemsController extends AppController
{
    public function initialize() {
        parent::initialize();
        $this->loadComponent('Search.Prg', [
            'actions' => ['index']
        ]);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        if ($this->request->is('json')) {
            $this->RequestHandler->respondAs('json'); 
            $this->response->type('application/json'); 
            
            $productTable = TableRegistry::getTableLocator()->get('RstTblitems');
            $rstTblitems = $productTable
                ->find('search', ['search' => $this->request->getQueryParams()])
                ->select(['ItemCode','ItemName','RstTblsubsourceitemqty.ItemQty','SellingPrice','itemcategorycode'])
                ->contain(['RstTblsubsourceitemqty' => function($qt){
                    return $qt->where(['RstTblsubsourceitemqty.ItemQty >=' => 5]);
                    return $qt;
                }])
                ->where(['ItemName IS NOT' => null, 'isActive' => 1]);
                
            $this->set([
                'data' => $rstTblitems,
                '_serialize' => ['data']
            ]);
        }
    }

    public function view ($id = null) {
        if ($this->request->is('json')) {
            $this->RequestHandler->respondAs('json'); 
            $this->response->type('application/json'); 
            $rstTblitems = $this->RstTblitems->findByItemcode($id)->select(['ItemCode','ItemName','SellingPrice','itemcategorycode'])->firstOrFail();
            $this->set([
                'data' => $rstTblitems,
                '_serialize' => ['data']
            ]);
        }
    }
    
    public function list ($id = null) {
        if ($this->request->is('json')) {
            $this->RequestHandler->respondAs('json'); 
            $this->response->type('application/json'); 
            $is = TableRegistry::get('RstTblitems');
            $rstTblitems = $is->find('all',['limit'=>4])
            ->select(['ItemCode','ItemName','RstTblsubsourceitemqty.ItemQty','SellingPrice','itemcategorycode'])
            ->contain(['RstTblsubsourceitemqty' => function($qt){
                return $qt->where(['RstTblsubsourceitemqty.ItemQty >=' => 5]);
                return $qt;
            }])
            ->order(['RAND()'])
            ->where(['itemcategorycode' => $id,'isactive' => true]);
            $this->set([
                'data' => $rstTblitems,
                '_serialize' => ['data']
            ]);
        }
    }
    
    public function suggest ($id = null) {
        if ($this->request->is('json')) {
            $this->RequestHandler->respondAs('json'); 
            $is = TableRegistry::get('RstTblitems');
            $rstTblitems = $is->find('all',['limit'=>1])
            ->select(['ItemCode','ItemName','SellingPrice','itemcategorycode'])
            ->order(['RAND()'])
            ->where(['itemcategorycode' => $id,'isactive' => true]);
            $this->set([
                'data' => $rstTblitems,
                '_serialize' => ['data']
            ]);
        }
    }
    
    public function sort () {
        if ($this->request->is('json')) {
            $this->RequestHandler->respondAs('json'); 
            $this->response->type('application/json'); 
            $sort = $this->request->getQuery('sortBy');
            
            $category = TableRegistry::get('Items');
            $drink = $category->findByItemcategoryname($sort)->firstOrFail();
            $id = $drink->ItemCategoryCode;
        
            $is = TableRegistry::get('RstTblitems');
            $rstTblitems = $is->find('all')
            ->select(['ItemCode','ItemName','SellingPrice','RstTblsubsourceitemqty.ItemQty','itemcategorycode'])
            ->contain(['RstTblsubsourceitemqty' => function($qt){
                return $qt->where(['RstTblsubsourceitemqty.ItemQty >=' => 5]);
                return $qt;
            }])
            ->where(['itemcategorycode' => $id,'isactive' => true]);
        
            $this->set([
                'data' => $this->paginate($rstTblitems),
                '_serialize' => ['data']
            ]);
        }
    }
    
    public function all () {
        if ($this->request->is('json')) {
            $this->RequestHandler->respondAs('json'); 
            $is = TableRegistry::get('RstTblitems');
            $rstTblitems = $is->find()->count();
            $this->set([
                'data' => $rstTblitems,
                '_serialize' => ['data']
            ]);
        }
    }
}
