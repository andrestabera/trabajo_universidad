<?php
    include_once ('empleado.php');
    include_once ('listar.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="pt-5">

            <div>
                <h3>Ingresar usuario</h3>
            </div>
            <form method="post" id="formulario">
                <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="nombre">Nombre</label>
                        <input required type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Nombre">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="exampleInputEmail1">Cedula</label>
                        <input required type="text" class="form-control" name="cedula" aria-describedby="emailHelp" placeholder="Cedula">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="exampleInputEmail1">Sueldo</label>
                        <input required type="text" class="form-control" name="sueldo" aria-describedby="emailHelp" placeholder="Sueldo">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="exampleInputEmail1">Dias</label>
                        <input required type="number" class="form-control" name="dias" aria-describedby="emailHelp" placeholder="Dias">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="hed">HED</label>
                        <input required type="text" class="form-control" name="hed" aria-describedby="emailHelp" placeholder="Horas extras diurnas">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="hen">HEN</label>
                        <input required type="hen" class="form-control" name="hen" aria-describedby="emailHelp" placeholder="Horas extras nocturnas">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="hedd">HEDD</label>
                        <input required type="text" class="form-control" name="hedd" aria-describedby="emailHelp" placeholder="Horas extras diurnas dominicales">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="hend">HEND</label>
                        <input required type="text" class="form-control" name="hend" aria-describedby="emailHelp" placeholder="Horas extras nocturnas dominicales">
                        <input name="create" value="1" type="hidden">
                    </div>
                </div>    
                <div class="row">
                    <div class="col-sm-12">
                        <input id="btn-ingresar" type="button" class="btn btn-info" value="Crear cliente">
                    </div>
                </div>            
            </form>
        </div>
        <div>  
            <?php if(count($empleados) > 0) { ?>      
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Sueldo</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($empleados as $empleado){ ?>
                    <tr>
                        <td><?php echo $empleado["nombre"] ?></td>
                        <td><?php echo $empleado["cedula"] ?></td>
                        <td><?php echo $empleado["sueldo"] ?></td>
                        <td>
                            <form  method="post" id="formulario">
                                <input type="button" id="<?php echo $empleado['id'] ?>" class="btn btn-danger btn-eliminar" value="Eliminar">                        
                            </form>
                        </td>
                        <td>
                            <form  method="post" id="form2">
                                <input type="button" name="<?php echo $empleado['id'] ?>" class="btn btn-danger btn-ver" value="ver">                        
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } ?>
        </div>
    </div>    

    <script>
        $(function(){
            $("#btn-ingresar").click(function(e){
                e.preventDefault();
            
                $.ajax({
                    url: "logica.php",
                    type: "POST",
                    data: $("#formulario").serialize(),
                    success: function(data) {
                        console.log(data);
                        if(data){
                            location.reload();
                        }
                    }
                });
            });

            $(".btn-eliminar").click(function(e){
                e.preventDefault();
                let idEmpleado = $(this).attr("id");
                $.ajax({
                    url: "logica.php",
                    type: "POST",
                    data: {id: idEmpleado, eliminar: true},
                    success: function(data) {
                        if(data){
                            location.reload();
                        }
                    }
                });
            });

            $(".btn-ver").click(function(e){
                
                let idEmpleado = $(this).attr("name");
                $.ajax({
                    url: "ver.php",
                    type: "POST",
                    data: {id: idEmpleado},
                    success: function(data) {
                        if(data){
                            location.reload();
                        }
                    }
                });
            });

        });
    </script>

</body>
</html>