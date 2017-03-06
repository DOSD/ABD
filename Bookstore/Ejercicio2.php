<!DOCTYPE html>
<!--Author: Axel Junestrand-->
<html>
<head>
    <title>Bookstore</title>
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="bookstore.jpg">
  <div>
    <?php
      //Open connection and select database
      $db = mysqli_connect('localhost','root','','libreria');
    ?>
    <form action="Ejercicio2.php" method="post">
      <fieldset>
        Categoria:
        <?php
          $query1 = mysqli_query($db, "SELECT * FROM `categoria`");
          echo "<select name='categorias'>";
          while($res = mysqli_fetch_array($query1)){
            echo "<option value='" . $res['categorias'] . "'>" .
            $res['categorias'] . "</option>";
          }
          echo "</select>";
        ?>
      </select>
      <br><br>
      Precio mínimo: <input type="text" name="min" size="11"><br><br>
      Precio máximo: <input type="text" name="max" size="11"><br><br>
      <input type="submit" name="aceptar" value="Seleccionar" UNCHECKED>
      <?php
          echo "<br><br>";
          echo "Libros disponibles: <br>";
          //Form values
          if (isset($_POST['categorias'])
              && isset($_POST['min'])
              && isset($_POST['max'])) {
            $categoria = $_POST['categorias'];
            $prMin = $_POST['min'];
            $prMax = $_POST['max'];
          } else {
            $categoria = "";
            $prMin = "";
            $prMax = "";
          }

          $query2 = mysqli_query($db, "SELECT titulo, precio FROM libros
                                       WHERE categoria = '$categoria'
                                       AND precio < $prMax
                                       AND precio > $prMin ");
          if(!$query2)
            echo "No hay libros disponibles...";
          else{
            //Print table
            echo "<table>";
            echo "<tr>";
            echo "<th>Titulo</th>";
            echo "<th>Precio</th>";
            echo "<tr>";
            while($libros = mysqli_fetch_assoc($query2)){
              echo "<tr>";
              echo "<td>" . $libros['titulo'] . "</td>";
              echo "<td>" . $libros['precio'] . "</td>";
              echo "</tr>";
            }
            echo "</table>";
          }
      ?>
    </fieldset>
    </form>
    <?php
      //Close connection with the database
      mysqli_close($db);
    ?>
  </div>
</body>
</html>
