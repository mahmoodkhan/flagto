<?php
// app/Controller/UsersController.php
class UsersController extends AppController {

	public $helpers = array('Html', 'Form');
	 
    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }
	
    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
            	$this->Auth->login($this->data);
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => '/'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
    
    public function beforeFilter() {
    	parent::beforeFilter();
		if ($this->params['controller'] == 'pages') {
    		$this->Auth->allow('/', 'front'); 
  		}
  		//$this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'add');
    	$this->Auth->allow('/', 'add'); // Letting users register themselves	
	}

	public function login() {
    	if ($this->request->is('post')) {
        	if ($this->Auth->login()) {
            	$this->redirect($this->Auth->redirect('/'));
        	} else {
            	$this->Session->setFlash(__('Invalid username or password, try again'));
        	}
    	}
	}

	public function logout() {
    	$this->redirect($this->Auth->logout());
	}
	
	
	public function isAuthorized($user) {
    	// All registered users can add posts
    	if ($this->action === 'add') {
        	return true;
    	}

    	// The owner of a post can edit and delete it
    	if (in_array($this->action, array('edit', 'delete'))) {
        	$userId = $this->request->params['pass'][0];
        	if ($this->User->isOwnedBy($userId, $user['id'])) {
            	return true;
        	}
    	}

    	return parent::isAuthorized($user);
	}
}
?>