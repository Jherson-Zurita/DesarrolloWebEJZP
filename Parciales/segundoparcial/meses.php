<form method="GET" id="formes">
<select name="mes" id="mes" onchange="calendario()">
    <option value="01">Enero</option>
    <option value="02">Febrero</option>
    <option value="03">Marzo</option>
    <option value="04">abril</option>
    <option value="05">abril</option>
    <option value="06">junio</option>
    <option value="07">julio</option>
    <option value="08">agosto</option>
    <option value="09">septiembre</option>
    <option value="10">octubre</option>
    <option value="11">noviembre</option>
    <option value="12">dicienbre</option>
</select>

<select name="anio" id="anio" onchange="calendario()">
    <?php for ( $i = 1975; $i <=2023; $i++) {
        echo "<option value=".$i.">$i</option>";
}?>
</select>
</form>