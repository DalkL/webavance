<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/04a767cd06.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{path}}/assets/css/styles.css">
    
</head>
<body>
    <div class="menu">
        <h1>List of moves</h1>
        <table class="movelist">
            <tr>
                <th>Name</th>
                <th>Input</th>
                <th>Category</th>
                <th>VTrigger</th>
                <th>VSkill</th>
                <th>Actions</th>
                <!-- <th>Comment</th> -->
            </tr>
            {%for move in moves%}
            <tr>
                <td>{{move.name}}</td>
                <td>{{move.inputs}}</td>
                <td>{{move.Category_idCategory}}</td>
                <td>{{move.VTriggers_idVTriggers}}</td>
                <td>{{move.VSkills_idVSkills}}</td>
                <!-- <td>{{move.comments}}</td> -->
                <td>
                    <a href="{{path}}Moves/edit/{{move.idMoves}}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a href="{{path}}Moves/delete/{{move.idMoves}}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                </td>
            </tr>
            {%endfor%}
        </table>
        
    </div>
</body>
</html>