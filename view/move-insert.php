
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
        
        <form class="add" action="{{path}}Moves/store" method="post">

            {%if errors != ""%}
                <div class="error">
                    {{errors|raw}}
                </div>

            {%endif%}

            <label for="name">Name:</label>
            <input type="text" name="name" id="" value=""><br>

            <label for="inputs">Inputs:</label>
            <input type="text" name="inputs" id="" value=""><br>

            <label for="Category_idCategory">Category:</label>
            <input type="number" name="Category_idCategory" id="" value=""><br>

            <label for="VTriggers_idVTriggers">VTrigger:</label>
            <input type="number" name="VTriggers_idVTriggers" id="" value=""><br>

            <label for="VSkills_idVSkills">VSkill:</label>
            <input type="number" name="VSkills_idVSkills" id="" value=""><br>

            <label for="comments">Comments:</label><br>
            <textarea name="comments" id="" cols="40" rows="10"></textarea><br>
            <input type="submit" value="ADD">
        </form>
    </div>
    <img class="img-logo" src="{{path}}assets/img/CAPCOM-logo.png" alt="CAPCOM-logo">
</body>
</html>