<?php
namespace App\Controller;
use Cake\Event\Event;
use App\Controller\AppController;

/**
 * Companies Controller
 *
 * @property \App\Model\Table\CompaniesTable $Companies
 *
 * @method \App\Model\Entity\Company[] paginate($object = null, array $settings = [])
 */
class CompaniesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $companies = $this->paginate($this->Companies);

        $this->set(compact('companies'));
        $this->set('_serialize', ['companies']);
    }

    /**
     * View method
     *
     * @param string|null $id Company id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $company = $this->Companies->get($id, [
            'contain' => ['Users', 'Chatrooms', 'Activities']
        ]);

        $this->set('company', $company);
        $this->set('_serialize', ['company']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$title = 'Create Companies';
		$this->set(compact('title'));
        $company = $this->Companies->newEntity();
        if ($this->request->is('post')) {
            $company = $this->Companies->patchEntity($company, $this->request->getData());
            if ($this->Companies->save($company)) {
                $this->Flash->success(__('The company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company could not be saved. Please, try again.'));
        }
        $users = $this->Companies->Users->find('list', ['limit' => 200]);
        $this->set(compact('company', 'users'));
        $this->set('_serialize', ['company']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Company id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $company = $this->Companies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $company = $this->Companies->patchEntity($company, $this->request->getData());
            if ($this->Companies->save($company)) {
                $this->Flash->success(__('The company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company could not be saved. Please, try again.'));
        }
        $users = $this->Companies->Users->find('list', ['limit' => 200]);
        $this->set(compact('company', 'users'));
        $this->set('_serialize', ['company']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Company id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $company = $this->Companies->get($id);
        if ($this->Companies->delete($company)) {
            $this->Flash->success(__('The company has been deleted.'));
        } else {
            $this->Flash->error(__('The company could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

	public function profile($id = null)  //show company profile
	{
		$title = 'Company Profile';
		$this->set(compact('title'));

		$company = $this->Companies->get($id, [
            'contain' => ['Users', 'Activities']
        ]);

        $this->set('company', $company);
        $this->set('_serialize', ['company']);

	}

	public function profilechat($id = null)  //chat
	{
		$title = 'Company Profile';
		$this->set(compact('title'));

		$company = $this->Companies->get($id, [
            'contain' => ['Users', 'Activities']
        ]);

        $this->set('company', $company);
        $this->set('_serialize', ['company']);

	}

	public function collection($aid = null, $id) //show all company's collection
	{
		$title = 'Collection';
		$this->set(compact('title'));

		$company = $this->Companies->get($id, [
            'contain' => ['Users', 'Activities']
        ]);

        $this->set('company', $company);
        $this->set('_serialize', ['company']);

		$comp = $this->Companies->Activities->get($aid);
		$this->set('comp', $comp);
        $this->set('_serialize', ['comp']);

		$this->set('getid', $id);
		$this->set('getaid', $aid);

		$chatroom = $this->Companies->Chatrooms->newEntity();
        if ($this->request->is('post')) {
            $chatroom = $this->Companies->Chatrooms->patchEntity($chatroom, $this->request->getData());
            if ($this->Companies->Chatrooms->save($chatroom)) {
                $this->Flash->success(__('The chatroom has been saved.'));

                return $this->redirect(['action' => 'collection', $aid, $id]);
            }
            $this->Flash->error(__('The chatroom could not be saved. Please, try again.'));
        }
        $companies = $this->Companies->Chatrooms->find('list', ['limit' => 200]);
		    $users = $this->Companies->Chatrooms->Users->find('list', ['limit' => 200]);
        $this->set(compact('chatroom', 'companies', 'users'));
        $this->set('_serialize', ['chatroom']);
		    $rest = $this->Companies->Chatrooms->find('all', [
  				'contain' => ['Companies', 'Users'],
  				'conditions' => ['company_id' => $id]
		    ]);

		    $this->set('rest', $rest);
        $this->set('_serialize', ['rest']);
		    $this->paginate = [
            'contain' => ['Companies', 'Users']
        ];

        $result = $this->paginate($rest, ['limit' => 2, 'order' => array('created' => 'desc')]);
        $this->set(compact('result'));
        $this->set('_serialize', ['result']);
	}

	public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('profile');
		$this->Auth->allow('collection');
    }
}
