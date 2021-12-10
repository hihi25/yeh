<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">   
    <title> Rincón Turco</title>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">

</head>

<body>
<?php
	include ('header.php');
?>

<div class="container" style="padding:20px">
    <div class="row">
        <div class="col-md-8" style="overflow:hidden">
            <div style="width:100%;height:500px;background-color:#c2c2c2;display:flex;justify-content:center">
                <img id="img_producto_principal" src="" style="height:100%;"></img>
            </div>    
        </div>   
        <div class="col-md-4">
            <div class="row" style="padding:3%">
                <h3 id="titulo_producto"></h3>
            </div>
            <div class="row" style="padding:3%">
                <div>Precio del Producto: <span id="precio_producto"></span> </div>
            </div>
            <div class="btn btn-primary">Agregar al carrito</div>  
        </div>   
    </div> 
     
</div>
<script>
var id_prod = <?php echo  json_encode($_GET['id']); ?>;
console.log()
cargarProducto(id_prod+'');


function cargarProducto(cod_pro){
    $.ajax({
    url:'servicios/productos/get_product.php',
    type:'POST',
    data:{
        cod_pro:1
    },
    success:function(data){
        console.log(JSON.stringify(data));
        /*var rsp_json = JSON.parse(data.substr(9));
        $.each(rsp_json, function(i, item) {
            $("#img_producto_principal").attr("src",item['rutimapro']);
            $('#titulo_producto').html(item['nompro']);
            $('#precio_producto').html(item['prepro']);
        });*/
        
    },
    error:function(err){
        console.error(err)
    }
	
});
}
</script>

</body>
</html>
