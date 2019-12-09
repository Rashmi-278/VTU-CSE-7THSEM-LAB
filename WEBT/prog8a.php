<html>
    <head>
        <style>
            table,td,th{
                border: 1px solid black;
                width: 35%;
                text-align: center;
                background-color: darkgray;
            }
            table{
                margin: auto;
            }
            input,p{
                text-align: right;
            }
        </style>
    </head>

    <body>
        <table>
            <form method="post">
                <caption><h2>SIMPLE CALCULATOR</h2></caption>
                <tr>
                    <td>First Number:</td><td><input type="text" name="num1"/></td>
                    <td rowspan="2"><input type="submit" name="submit" /></td>
                </tr>
                <tr>
                    <td>Second Number:</td>
                    <td><input type="text" name="num2"/></td>

                </tr>
            </form>
        <?php
            if(isset($_POST['submit'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                if(is_numeric($num1) and is_numeric($num2)){
                    echo "<tr><td>Add</td><td>".($num1+$num2)."</td></tr>";
                    echo "<tr><td>Sub</td><td><p>".($num1-$num2)."</p></td></tr>";
                    echo "<tr><td>Mul</td><td><p>".($num1*$num2)."</p></td></tr>";
                    echo "<tr><td>Div</td><td><p>".($num1/$num2)."</p></td></tr>";
                    echo "</table>";
                }
                else{
                    echo "<script type='text/javascript'>alert('Enter Valid Number');</script>";
                }
            }
        ?>
    </body>
</html>