<?php

   class ModelMoves extends CRUD{
       protected $table = 'Moves';
       protected $primaryKey = 'idMoves';
       protected $fillable = ["name","inputs","Category_idCategory","VTriggers_idVTriggers","VSkills_idVSkills","comments"];
   } 

?>