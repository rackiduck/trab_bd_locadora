<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fita Controller
 *
 * @property \App\Model\Table\FitaTable $Fita
 *
 * @method \App\Model\Entity\Fitum[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FitaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Filme']
        ];
        $fita = $this->paginate($this->Fita);

        $this->set(compact('fita'));
    }

    /**
     * View method
     *
     * @param string|null $id Fitum id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fitum = $this->Fita->get($id, [
            'contain' => ['Filme']
        ]);

        $this->set('fitum', $fitum);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fitum = $this->Fita->newEntity();
        if ($this->request->is('post')) {
            $fitum = $this->Fita->patchEntity($fitum, $this->request->getData());
            if ($this->Fita->save($fitum)) {
                $this->Flash->success(__('The fitum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fitum could not be saved. Please, try again.'));
        }
        $filme = $this->Fita->Filme->find('list', ['limit' => 200]);
        $this->set(compact('fitum', 'filme'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fitum id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fitum = $this->Fita->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fitum = $this->Fita->patchEntity($fitum, $this->request->getData());
            if ($this->Fita->save($fitum)) {
                $this->Flash->success(__('The fitum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fitum could not be saved. Please, try again.'));
        }
        $filme = $this->Fita->Filme->find('list', ['limit' => 200]);
        $this->set(compact('fitum', 'filme'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fitum id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fitum = $this->Fita->get($id);
        if ($this->Fita->delete($fitum)) {
            $this->Flash->success(__('The fitum has been deleted.'));
        } else {
            $this->Flash->error(__('The fitum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
