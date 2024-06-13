
<?php $id=$_GET['id']; 
    include("conexion.php");
    $sql = "SELECT id, titulo,autor,ideditorial,anio FROM libros where id=".$id;
    $result = $con->query( $sql );
    $datos = $result->fetch_assoc();

    $sql="SELECT id,editorial from editoriales";
    $resultocupa = $con->query($sql);
    
    ?>
    <h1>Operacion Mostrar</h1>
    <form action="javascript:editarpersona()" method="post" enctype="multipart/form-data" id="form-persona">
        <input type="hidden" name="id" value="<?php echo $datos['id'];?>">
        <label for="titulo">Titulo :</label>
        <input type="text" id="titulo" name="titulo" value="<?php echo $datos['titulo'];?>"><br>
        <label for="Autor">Autor :</label>
        <input type="text" id="autor" name="autor" value="<?php echo $datos['autor'];?>"><br>
        <label for="editorial">Editorial :</label>
        <select name="editorial" id="editorial" >
            <?php while ($editorial = $resultocupa->fetch_assoc()) {
        ?>
        <option value="<?php  echo $editorial['id'] ?>"   
        <?php echo $editorial['id']==$datos['ideditorial']?"selected":"";?>
        
        ><?php  echo $editorial['editorial'] ?></option>
        <?php }?>
         </select><br>
         <label for="anio">Año :</label>
        <input type="number" id="anio" name="anio" value="<?php echo $datos['anio'];?>"><br>
    </form>
