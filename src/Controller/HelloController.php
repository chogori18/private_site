<?php
namespace App\Controller;

use App\Controller\AppController;

class HelloController extends AppController {
	public function initialize() {
		$this->viewBuilder()->setLayout('hello');
	}
    // クエリパラメーターTEST;
// 	public function index() {
//         $id = 'no name';
//         if (isset($this->request->query['id'])){
//             $id = $this->request->query['id'];
//         }
//         $pass = 'no password';
//         if (isset($this->request->query['pass'])){
//             $pass = $this->request->query['pass'];
//         }
//         $id = $this->request->query['id'];
//         $pass = $this->request->query['pass'];
//         echo '<html><body><h1>Hello!</h1>';
//         echo '<ul><li>your id: ' . $id . '</li>';
//         echo '<li>password: ' . $pass . '</li></ul>';
//         echo '</body></html>';
// }
// }
    // public $autoRender = false;
    // private $data = [
    //     ['name'=>'taro' , 'mail' =>'taro@yamada', 'tel'=>'090-999-999'],
    //     ['name'=>'Hanked' , 'mail' =>'hanako@flower', 'tel'=>'080-888-888'],
    //     ['name'=>'sachiko' , 'mail' =>'sachiko@happy', 'tel'=>'070-777-777'],
    // ];

    // public function index() {
    //     $id = 2;
    //     if (isset($this->request->quest['id'])) {
    //         $id = $this->request->query['id'];
    //     }
    //     echo json_encode($this->data[$id]);
    // }
    // }

    public function index() {
        // $this->viewBuilder()->isAutoLayoutEnabled(false);
        // $this->set('title', 'Hello!');

        // if($this->request->isPost()) {
        //     $this->set('data', $this->request->data['Form1']);
        // } else {
        //     $this->set('data', []);
        // }
        $this->set('header', ['subtitle'=>'from Controller with Love♡']);
        $this->set('footer', ['copyright'=>'名無しの権兵衛']);
        }

//     public function form() {
//         $this->viewBuilder()->isAutoLayoutEnabled(false);
//         $name = $this->viewBuilder()->data['name'];
//         $mail = $this->viewBuilder()->data['mail'];
//         $age = $this->viewBuilder()->data['age'];
//         $res = 'こんにちは，' . $name . ' (' . $age . ')さんメールアドレスは，' . ' ですね？';
//         $values = [
//             'title'=>'Result',
//             'message'=> $res
//         ];
//         $this->set($values);
//     }
//     public function beforeFilter(Event $event)
// {
//  $this->getEventManager()->off($this->Csrf);
// }
    }