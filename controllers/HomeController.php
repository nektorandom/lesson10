<?php

class HomeController extends BaseController {

	public function index()
	{
		$this->LoadModel('Messages');
		$model = new MessagesModel();

		$page=isset($_GET['page']) ? $_GET['page'] : 1;
		
		$data['page'] = $page;
		$data['total'] = $model->getMessagesCount();
		$data['messages'] = $model->getAllMessages($page);
		//$data['messages'] = $model->getAllMessages();

		$this->LoadModel('Account');
		$userInfo = new AccountModel();

		if(isset($_SESSION['user_id'])) {
			$user = $userInfo->getUserById($_SESSION['user_id']);
			$data['user_name'] = $user['name'];
		}

		$this->LoadPage('home',$data);
	}
}
