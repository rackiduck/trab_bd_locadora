<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Emprestimo Controller
 *
 * @property \App\Model\Table\EmprestimoTable $Emprestimo
 *
 * @method \App\Model\Entity\Emprestimo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmprestimoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cliente', 'Filme']
        ];
        $emprestimo = $this->paginate($this->Emprestimo);

        $this->set(compact('emprestimo'));
    }

    /**
     * View method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emprestimo = $this->Emprestimo->get($id, [
            'contain' => ['Cliente', 'Filme']
        ]);

        $this->set('emprestimo', $emprestimo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emprestimo = $this->Emprestimo->newEntity();
        if ($this->request->is('post')) {
            $emprestimo = $this->Emprestimo->patchEntity($emprestimo, $this->request->getData());
            if ($this->Emprestimo->save($emprestimo)) {
                $this->Flash->success(__('The emprestimo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emprestimo could not be saved. Please, try again.'));
        }
        $cliente = $this->Emprestimo->Cliente->find('list', ['limit' => 200]);
        $filme = $this->Emprestimo->Filme->find('list', ['limit' => 200]);
        $this->set(compact('emprestimo', 'cliente', 'filme'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emprestimo = $this->Emprestimo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emprestimo = $this->Emprestimo->patchEntity($emprestimo, $this->request->getData());
            if ($this->Emprestimo->save($emprestimo)) {
                $this->Flash->success(__('The emprestimo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emprestimo could not be saved. Please, try again.'));
        }
        $cliente = $this->Emprestimo->Cliente->find('list', ['limit' => 200]);
        $filme = $this->Emprestimo->Filme->find('list', ['limit' => 200]);
        $this->set(compact('emprestimo', 'cliente', 'filme'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emprestimo = $this->Emprestimo->get($id);
        if ($this->Emprestimo->delete($emprestimo)) {
            $this->Flash->success(__('The emprestimo has been deleted.'));
        } else {
            $this->Flash->error(__('The emprestimo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
