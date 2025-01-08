<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>
    <form action="">
            <div>
                Name:
                <input type="text" name="na" id="nam" placeholder="enter name">
            </div>
                <br>
            <div>
                ID:
                <input type="text" name="id" id="idd" placeholder="enter id">
            </div>
                <br>
            <div>
               Email:
               <input type="email" name="em" id="ema" placeholder="enter email">
            </div>
                <br>
            <div>
                password:
                <input type="text" name="pa" id="pass" placeholder="enter password">
            </div>
                <br><br>
            <div>
                <input type="button" name="save" id="save" value="save">
                <input type="button" value="update" id="update">
                <input type="button" value="reset" id="reset">
                <input type="button" name="delete" id="delete">
            </div>

    </form>

    <table style="border-collapse:collapse" border="1" cellspacing="5">
        <thead>
            <tr>
                <th>id</th>
                <th>email</th>
                <th>pass</th>
            </tr>
        </thead>
    </table>
</body>
</html>