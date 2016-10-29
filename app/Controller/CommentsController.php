<?php
class CommentsController extends AppController {
    public function add() {
        $this->layout = false;
        if($this->request->is('post')){
            $this->request->data['Comment']['post_id'] = $this->request->query['post_id'];
            $this->request->data['Comment']['date_modified'] = date('Y-m-d h:i:s');       
            if(!$this->request->data['Comment']['name']){
                $error['name'] = "This field can not be empty";
            }
            if(!$this->request->data['Comment']['comment']){
                $error['comment'] = "This field can not be empty";
            }
            if(!$this->request->data['Comment']['email'] || !preg_match('/^(\S+)@([a-z0-9-]+)(\.)([a-z]{2,4})(\.?)([a-z]{0,4})+$/', $this->request->data['Comment']['email'])){
                $error['email'] = "Pleas enter valid email addres";
            }
            
            if(isset($error)){
                $this->set('error',$error);
            } else {
                $this->Comment->create();
                if($this->Comment->save($this->request->data)){
                } else {
                    $error = 'error post added';
                  $this->set('error',$error);
                }
            } 
        }
        $this->loadModel('Post');
        $data = $this->Post->findById($this->request->query['post_id']);           
        $this->set('data',$data);
    }
}