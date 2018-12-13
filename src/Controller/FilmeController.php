<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Filme Controller
 *
 * @property \App\Model\Table\FilmeTable $Filme
 *
 * @method \App\Model\Entity\Filme[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilmeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $filme = $this->paginate($this->Filme);

        $this->set(compact('filme'));
    }

    /**
     * View method
     *
     * @param string|null $id Filme id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $filme = $this->Filme->get($id, [
            'contain' => ['Ator', 'Categoria', 'Fita', 'Emprestimo']
        ]);

        $this->set('filme', $filme);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $filme = $this->Filme->newEntity();
        if ($this->request->is('post')) {
            $filme = $this->Filme->patchEntity($filme, $this->request->getData());
            if ($this->Filme->save($filme)) {
                $this->Flash->success(__('The filme has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The filme could not be saved. Please, try again.'));
        }
        $ator = $this->Filme->Ator->find('list', ['limit' => 200]);
        $categoria = $this->Filme->Categoria->find('list', ['limit' => 200]);
        $this->set(compact('filme', 'ator', 'categoria'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Filme id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $filme = $this->Filme->get($id, [
            'contain' => ['Ator', 'Categoria']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $filme = $this->Filme->patchEntity($filme, $this->request->getData());
            if ($this->Filme->save($filme)) {
                $this->Flash->success(__('The filme has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The filme could not be saved. Please, try again.'));
        }
        $ator = $this->Filme->Ator->find('list', ['limit' => 200]);
        $categoria = $this->Filme->Categoria->find('list', ['limit' => 200]);
        $this->set(compact('filme', 'ator', 'categoria'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Filme id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $filme = $this->Filme->get($id);
        if ($this->Filme->delete($filme)) {
            $this->Flash->success(__('The filme has been deleted.'));
        } else {
            $this->Flash->error(__('The filme could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
