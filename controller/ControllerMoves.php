<?php
RequirePage::requireModel('CRUD');
RequirePage::requireModel('Moves');

class ControllerMoves{

  public function index(){

  return Twig::render('move-list.php');

  }

  public function list(){
    $moves = new ModelMoves;
    $select = $moves->select();
    return Twig::render('move-list.php', ['moves' => $select]);
  }

  public function create(){
    return Twig::render('move-insert.php', []);
  }

  public function store(){
    $validation = new Validation;
    
    
    extract($_POST);
    $validation->name('name')->value($name)->pattern('words')->required()->max(45);
    $validation->name('inputs')->value($inputs)->required()->max(45);
    $validation->name('Category_idCategory')->value($Category_idCategory)->pattern('int')->required()->max(11);
    $validation->name('VTriggers_idVTriggers')->value($VTriggers_idVTriggers)->pattern('int')->max(11);
    $validation->name('VSkills_idVSkills')->value($VSkills_idVSkills)->pattern('int')->max(11);
    $validation->name('comments')->value($comments)->pattern('text')->max(255);
    
    

    if($validation->isSuccess()){
      $moves = new ModelMoves;
      $insert = $moves->insert($_POST);
      var_dump($insert);
      
      RequirePage::redirect('list'); 
        
    }else{
     // var_dump($validation->getErrors());
       $errors =  $validation->displayErrors();

      return Twig::render('move-insert.php', ['errors' => $errors, 'move' => $_POST]);
    }
  }

  public function edit($value){
    $moves = new ModelMoves;
    $selectId = $moves->selectId($value);

    return Twig::render('move-edit.php', ['move' => $selectId]);
  }

  public function delete($value){
    $moves = new ModelMoves;
    $delete = $moves->delete($value);
    
    RequirePage::redirect('Moves/list'); 
}
}




