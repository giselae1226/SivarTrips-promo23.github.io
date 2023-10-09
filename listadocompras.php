<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="css2/style.css">
   <link rel="stylesheet" href="http://localhost/admiviajes2/listadocompras.php">


    <title>Tabla de compras</title>
    <style>
   
        table {
                    
          padding-top: 100;
          padding-left: 70px;   
          padding-right: 70px;
         position: relative;
         z-index: 2;
          display: block;
         margin: auto;
            border-collapse: collapse;
            width: 100%;
            margin:10px;
 
            
        }
       

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 2px solid black;
            border-color:#f5f5dc;
            display:auto;
            border-radius: auto;
            

        
           
        }

        button:hover {
            background-color: #F2E3D5;
            transition: 1s;
            color:black;
            
        }

        .delete-btn {
            background-color: #015958;
            border: 2px solid black;
            padding: 15px 40px;
            text-align: center;
            text-decoration: none;
            display: flex;
            cursor: pointer;
            border-radius: 4px;
            color:white;

            
        }
        

.in-flex div  {
    padding: 25px;
    margin: 20px;
    flex-direction: column;
    align-items: flex-start;
    padding: 10px;
    border-style: solid;
    border-color: #f5f5dc ;
    list-style: none;
    padding: 0;
    width: 90%;
    max-width: 1000px;
    margin: auto;
    box-shadow: black;
    border-radius: 30px;
    display: block;
    box-shadow: 10px 5px 5px black;
    height: auto;
    display:grid;
    
    
} 
img{
    height: 300px;
    margin: -65px;
    padding: 5px;
    text-align: right;

    
    
 
}

     
    </style>
</head>

<i
<body>

    

    <div class="in-flex" >
        
 
    <img src="img/persona.png" >
    <section class="home">
    <div class="container"> 
    <h1>Tabla de Compras</h1>
    <img style="float:right;" src="img/logo.jpg" class="imagen" alt="">

     

    <table>
      
    

    

        <tr >
            <th>Número de DUI</th>
            <th>Nombre y Apellido</th>
            <th>Nombre del Lugar</th>
            <th>Número de Cupos Comprados</th>
            <th>Acción</th>
        </tr>
        <?php
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sivartrips";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Consulta SQL para obtener los datos de la tabla compra
        $sql = "SELECT compra.num_DUI, compra.NomyApell, lugares.Nombre, compra.cupos_comprados
                FROM compra
                INNER JOIN lugares ON compra.id_lugar = lugares.id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar los datos en la tabla
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["num_DUI"] . "</td>";
                echo "<td>" . $row["NomyApell"] . "</td>";
                echo "<td>" . $row["Nombre"] . "</td>";
                echo "<td>" . $row["cupos_comprados"] . "</td>";
                echo "<td><button class='delete-btn'>Eliminar</button></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No se encontraron registros</td></tr>";
        }

        $conn->close();
        ?>
        </div>
    </table>
    </section>
    </div > 
    
    <script>
        const deleteBtns = document.querySelectorAll('.delete-btn');

        deleteBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const row = btn.parentNode.parentNode;
                const numDUI = row.cells[0].innerText;
                const ajax = new XMLHttpRequest();
                ajax.open("POST", "delete.php", true);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                        row.parentNode.removeChild(row);
                    }
                };
                ajax.send(`numDUI=${numDUI}`);
            });
        });
    </script>
    
</body>
</html>

