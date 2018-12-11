<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ator Controller
 *
 * @property \App\Model\Table\AtorTable $Ator
 *
 * @method \App\Model\Entity\Ator[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AtorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ator = $this->paginate($this->Ator);

        $this->set(compact('ator'));
    }

    /**
     * View method
     *
     * @param string|null $id Ator id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ator = $this->Ator->get($id, [
            'contain' => ['Filme']
        ]);

        $this->set('ator', $ator);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ator = $this->Ator->newEntity();
        if ($this->request->is('post')) {
            $ator = $this->Ator->patchEntity($ator, $this->request->getData());
            if ($this->Ator->save($ator)) {
                $this->Flash->success(__('The ator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ator could not be saved. Please, try again.'));
        }
        $filme = $this->Ator->Filme->find('list', ['limit' => 200]);
        $this->set(compact('ator', 'filme'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ator id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ator = $this->Ator->get($id, [
            'contain' => ['Filme']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ator = $this->Ator->patchEntity($ator, $this->request->getData());
            if ($this->Ator->save($ator)) {
                $this->Flash->success(__('The ator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ator could not be saved. Please, try again.'));
        }
        $filme = $this->Ator->Filme->find('list', ['limit' => 200]);
        $this->set(compact('ator', 'filme'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ator id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ator = $this->Ator->get($id);
        if ($this->Ator->delete($ator)) {
            $this->Flash->success(__('The ator has been deleted.'));
        } else {
            $this->Flash->error(__('The ator could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
