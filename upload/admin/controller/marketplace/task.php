<?php
namespace Opencart\Admin\Controller\Marketplace;
/**
 * Class Task
 *
 * @package Opencart\Admin\Controller\Marketplace
 */
class Task extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('marketplace/task');

		$this->document->setTitle($this->language->get('heading_title'));

		$url = '';

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('marketplace/task', 'user_token=' . $this->session->data['user_token'] . $url)
		];

		$data['delete'] = $this->url->link('marketplace/task.delete', 'user_token=' . $this->session->data['user_token']);
		$data['enable']	= $this->url->link('marketplace/task.enable', 'user_token=' . $this->session->data['user_token']);
		$data['disable'] = $this->url->link('marketplace/task.disable', 'user_token=' . $this->session->data['user_token']);

		$data['list'] = $this->getList();

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('marketplace/task', $data));
	}

	/**
	 * List
	 *
	 * @return void
	 */
	public function list(): void {
		$this->load->language('marketplace/task');

		$this->response->setOutput($this->getList());
	}

	/**
	 * Get List
	 *
	 * @return string
	 */
	public function getList(): string {
		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['action'] = $this->url->link('marketplace/task.list', 'user_token=' . $this->session->data['user_token'] . $url);

		// Tasks
		$data['tasks'] = [];

		$filter_data = [
			'start' => ($page - 1) * $this->config->get('config_pagination_admin'),
			'limit' => $this->config->get('config_pagination_admin')
		];

		$this->load->model('setting/task');

		$results = $this->model_setting_task->getTasks($filter_data);

		foreach ($results as $result) {
			$data['tasks'][] = ['run' => $this->url->link('marketplace/task.run', 'user_token=' . $this->session->data['user_token'] . '&task_id=' . $result['task_id'])] + $result;
		}

		// Total Tasks
		$task_total = $this->model_setting_task->getTotalTasks();

		// Pagination
		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $task_total,
			'page'  => $page,
			'limit' => $this->config->get('config_pagination_admin'),
			'url'   => $this->url->link('marketplace/task.list', 'user_token=' . $this->session->data['user_token'] . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($task_total) ? (($page - 1) * $this->config->get('config_pagination_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_pagination_admin')) > ($task_total - $this->config->get('config_pagination_admin'))) ? $task_total : ((($page - 1) * $this->config->get('config_pagination_admin')) + $this->config->get('config_pagination_admin')), $task_total, ceil($task_total / $this->config->get('config_pagination_admin')));

		return $this->load->view('marketplace/task_list', $data);
	}

	/**
	 * Run
	 *
	 * @return void
	 */
	public function run(): void {
		$this->load->language('marketplace/task');

		$json = [];

		if (isset($this->request->get['task_id'])) {
			$task_id = (int)$this->request->get['task_id'];
		} else {
			$task_id = 0;
		}

		if (!$this->user->hasPermission('modify', 'marketplace/task')) {
			$json['error'] = $this->language->get('error_permission');
		}

		$this->load->model('setting/task');

		$task_info = $this->model_setting_task->getTask($task_id);

		if (!$task_info) {
			$json['error'] = $this->language->get('error_exists');
		}

		if (!$json) {
			$pos = strpos($task_info['action'], '/');

			$path = substr($task_info['action'], 0, $pos + 1);

			$task = substr($task_info['action'], $pos + 1);

			if ($path == 'admin/') {
				$output = shell_exec('php ' . DIR_APPLICATION . 'index.php ' . $task . ' --page 1');
			}

			if ($path == 'catalog/') {
				$output = shell_exec('php ' . DIR_OPENCART . 'index.php ' . $task . ' --page 1');
			}

			echo '$output ' . $output;

			$this->model_setting_task->editTask($task_info['task_id']);

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Enable
	 *
	 * @return void
	 */
	public function enable(): void {
		$this->load->language('marketplace/task');

		$json = [];

		if (isset($this->request->post['selected'])) {
			$selected = (array)$this->request->post['selected'];
		} else {
			$selected = [];
		}

		if (!$this->user->hasPermission('modify', 'marketplace/task')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			$this->load->model('setting/task');

			foreach ($selected as $task_id) {
				$this->model_setting_task->editStatus((int)$task_id, true);
			}

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Disable
	 *
	 * @return void
	 */
	public function disable(): void {
		$this->load->language('marketplace/task');

		$json = [];

		if (isset($this->request->post['selected'])) {
			$selected = (array)$this->request->post['selected'];
		} else {
			$selected = [];
		}

		if (!$this->user->hasPermission('modify', 'marketplace/task')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			$this->load->model('setting/task');

	    	foreach ($selected as $task_id) {
				$this->model_setting_task->editStatus((int)$task_id, false);
			}

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Delete
	 *
	 * @return void
	 */
	public function delete(): void {
		$this->load->language('marketplace/task');

		$json = [];

		if (isset($this->request->post['selected'])) {
			$selected = (array)$this->request->post['selected'];
		} else {
			$selected = [];
		}

		if (!$this->user->hasPermission('modify', 'marketplace/event')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			// Event
			$this->load->model('setting/task');

			foreach ($selected as $task_id) {
				$this->model_setting_task->deleteTask((int)$task_id);
			}

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
