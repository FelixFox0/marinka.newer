<?php
class PostsController extends AppController {
    public function index() {
        foreach ($this->Post->find('all',array('order' => array('Post.date_modified' => 'desc'), 'recursive' =>-1 )) as $key => $value) {
            $data['posts'][]= array(
                'id'=>$value['Post']['id'],
                'title'=>$value['Post']['title'],
                'content'=> substr(strip_tags(html_entity_decode($value['Post']['content'], ENT_QUOTES, 'UTF-8')), 0, 300),
            );
        }
        if(isset($data)){
            $this->set('data',$data);
        } 
    }
        
    public function add(){
        if($this->request->is('post')){
            $this->request->data['Post']['date_modified'] = date('Y-m-d h:i:s');
            foreach ($this->request->data['Post'] as $key=>$field){
                if(!$field){
                    $error = 'error ' . $key;
                }
            }
            if(isset($error)){
                $this->Session->setFlash($error);
            } else {
                $this->Post->create();
                if($this->Post->save($this->request->data)){
                    $this->Session->setFlash('Post added');
                    $this->redirect('/');
                }
                $this->Session->setFlash('error post added');
            }
        } 
        $this->render('addedit');
    }
    
    public function edit($path=null){
        if(!empty($path)){
        if($this->request->is('post')){
            $this->request->data['Post']['date_modified'] = date('Y-m-d h:i:s');
            foreach ($this->request->data['Post'] as $key=>$field){             
                if(!$field){
                    $error = 'error ' . $key;
                }
            }
            if(isset($error)){
                $this->Session->setFlash($error);
            } else {
                $this->Post->id = $path;
                if($this->Post->save($this->request->data)){
                    $this->Session->setFlash('Post edited');
                    $this->redirect('/');
                } else {
                    $this->Session->setFlash('error post edited');
                }
            }
        } else{
            $data = $this->Post->findById($path);
            if(!$data){
                $this->redirect('/');
            }
            $this->set('data',$data);
        }
        $this->render('addedit');
        }else{
            $this->Session->setFlash('error post index');
            $this->redirect('/');
        }
    }
         
    public function delete($path=null){
        if(!empty($path)){
            
            $this->Post->delete($path, true);
            $this->loadModel('Comment');
            $this->Comment->deleteAll(array('Comment.post_id' => $path));
        } 
        $this->redirect('/');
        $this->layout = false;
        $this->render(false);
    }
    
    public function post($path=null){
        if(empty($path)){
            $this->redirect('/');
        }else{
            $data = $this->Post->findById($path);           
            $this->set('data',$data);
        }
    }
}