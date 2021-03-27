<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="pt-5">

            <div>
                <h3>Ingresar usuario</h3>
            </div>
            <form>
                <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="nombre">Nombre</label>
                        <input required type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="exampleInputEmail1">Cedula</label>
                        <input required type="text" class="form-control" id="cedula" aria-describedby="emailHelp" placeholder="Cedula">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="exampleInputEmail1">Sueldo</label>
                        <input required type="text" class="form-control" id="sueldo" aria-describedby="emailHelp" placeholder="Sueldo">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="exampleInputEmail1">Dias</label>
                        <input required type="number" class="form-control" id="dias" aria-describedby="emailHelp" placeholder="Dias">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="hed">HED</label>
                        <input required type="hed" class="form-control" id="hed" aria-describedby="emailHelp" placeholder="Horas extras diurnas">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="hen">HEN</label>
                        <input required type="hen" class="form-control" id="hen" aria-describedby="emailHelp" placeholder="Horas extras nocturnas">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="hedd">HEDD</label>
                        <input required type="hedd" class="form-control" id="hedd" aria-describedby="emailHelp" placeholder="Horas extras diurnas dominicales">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="hend">HEND</label>
                        <input required type="hend" class="form-control" id="hend" aria-describedby="emailHelp" placeholder="Horas extras nocturnas dominicales">
                    </div>
                </div>    
                <div class="row">
                    <div class="col-sm-12">
                        <button type="submit">Crear cliente</button>
                    </div>
                </div>            
            </form>
        </div>
        <div>
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
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        (function(){
            $("form").submit(function(e){
                e.preventDefault();
                console.log("por aqui esta");

                var dataString = $(this).serialize();
        
                // alert(dataString); return false;
            
                $.ajax({
                    type: "POST",
                    url: "logica.php",
                    data: dataString,
                    success: function () {
                        console.log("llego de la peticion";)
                    }
                });
            });

        })();
    </script>

</body>
</html>