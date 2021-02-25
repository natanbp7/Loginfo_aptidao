<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoriasProdutos Controller
 *
 * @property \App\Model\Table\CategoriasProdutosTable $CategoriasProdutos
 *
 * @method \App\Model\Entity\CategoriasProduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriasProdutosController extends AppController
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
                'CategoriasProdutos.id' => 'desc',
            ]
        ];
        $categoriasProdutos = $this->paginate($this->CategoriasProdutos);

        $this->set(compact('categoriasProdutos'));
    }

    /**
     * View method
     *
     * @param string|null $id Categorias Produto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriasProduto = $this->CategoriasProdutos->get($id, [
            'contain' => ['Produtos'],
        ]);

        $this->set('categoriasProduto', $categoriasProduto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriasProduto = $this->CategoriasProdutos->newEntity();
        if ($this->request->is('post')) {
            $categoriasProduto = $this->CategoriasProdutos->patchEntity($categoriasProduto, $this->request->getData());
            if ($this->CategoriasProdutos->save($categoriasProduto)) {
                $this->Flash->success(__('Categoria foi salva.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A categoria não pode ser salva, tente novamente.'));
        }
        $this->set(compact('categoriasProduto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorias Produto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriasProduto = $this->CategoriasProdutos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriasProduto = $this->CategoriasProdutos->patchEntity($categoriasProduto, $this->request->getData());
            if ($this->CategoriasProdutos->save($categoriasProduto)) {
                $this->Flash->success(__('A categoria do produto foi salva.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A categoria não pode ser salva, tente novamente.'));
        }
        $this->set(compact('categoriasProduto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorias Produto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriasProduto = $this->CategoriasProdutos->get($id);
        if ($this->CategoriasProdutos->delete($categoriasProduto)) {
            $this->Flash->success(__('A categoria foi excluída.'));
        } else {
            $this->Flash->error(__('A categoria não pode ser excluída, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
