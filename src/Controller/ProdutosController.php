<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Produtos Controller
 *
 * @property \App\Model\Table\ProdutosTable $Produtos
 *
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProdutosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 3,
            'order' => [
                'Produtos.id' => 'desc',
            ]
        ];
        $produtos = $this->paginate($this->Produtos);

        $this->set(compact('produtos'));
    }

    /**
     * View method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produto = $this->Produtos->get($id, [
            'contain' => ['CategoriasProdutos', 'Vendas'],
        ]);

        $this->set('produto', $produto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produto = $this->Produtos->newEntity();
        if ($this->request->is('post')) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->getData());
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('O produto foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O produto não pode ser salvo, tente novamente.'));
        }
        $categoriasProdutos = $this->Produtos->CategoriasProdutos->find('list', ['limit' => 200]);
        $this->set(compact('produto', 'categoriasProdutos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produto = $this->Produtos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->getData());
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('O produto foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O produto não pode ser salvo, tente novamente.'));
        }
        $categoriasProdutos = $this->Produtos->CategoriasProdutos->find('list', ['limit' => 200]);
        $this->set(compact('produto', 'categoriasProdutos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produto = $this->Produtos->get($id);
        if ($this->Produtos->delete($produto)) {
            $this->Flash->success(__('O produto foi excluído.'));
        } else {
            $this->Flash->error(__('O produto não pode ser excluido, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
