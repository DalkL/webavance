
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
        <h1>TP2</h1>
        
        <form class="update" action="{{path}}move/update" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="" value="{{move.name}}"><br>

            <label for="inputs">Inputs:</label>
            <input type="text" name="inputs" id="" value="{{move.inputs}}"><br>

            <label for="Category_idCategory">Category:</label>
            <input type="text" name="Category_idCategory" id="" value="{{move.Category_idCategory}}"><br>

            <label for="VTriggers_idVTriggers">VTrigger:</label>
            <input type="text" name="VTriggers_idVTriggers" id="" value="{{move.VTriggers_idVTriggers}}"><br>

            <label for="VSkills_idVSkills">VSkill:</label>
            <input type="text" name="VSkills_idVSkills" id="" value="{{move.VSkills_idVSkills}}"><br>

            <label for="comments">Comments:</label><br>
            <textarea name="comments" id="" cols="40" rows="10">{{move.comments}}</textarea><br>
            <input type="submit" value="UPDATE">
        </form>
    </div>
    <img class="img-logo" src="{{path}}assets/img/CAPCOM-logo.png" alt="CAPCOM-logo">
</body>
</html>