<?php
namespace app\controllers;
use app\model\Products;

abstract class Controller 
{
    
	private $action;
	private $defaultAction = 'index';
	private $layout = 'main';


	public function runAction($action = null) {
		$this->action = $action ?: $this->defaultAction;
		$method = 'action' . ucfirst($this->action);
		if(method_exists($this, $method)) {
			$this->$method();
		} else {
			echo "отсутствует метод в контроллере";
		}
    }

    public function actionIndex() {
		echo $this->render('index', []);
	}
    
    public function render($template, $params) {
		return $this->renderTemplate("layouts/{$this->layout}", ['content' => $this->renderTemplate($template, $params)
		// ,'user' => User::getOne($id)
		]);
	}

	public function renderTemplate($template, $params) {
		ob_start();
		extract($params);
		// var_dump()
		$fileName = TEMPLATES_DIR . $template . '.php';
		include $fileName;
		return ob_get_clean();
	}
}