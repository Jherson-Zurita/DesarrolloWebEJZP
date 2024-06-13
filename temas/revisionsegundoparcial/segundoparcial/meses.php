<form method="GET" id="formes">
<select name="mes" id="mes" onchange="calendario()">
    <option value="1">Enero</option>
    <option value="2">Febrero</option>
    <option value="3">Marzo</option>
    <option value="4">abril</option>
    <option value="5">abril</option>
    <option value="6">junio</option>
    <option value="7">julio</option>
    <option value="8">agosto</option>
    <option value="9">septiembre</option>
    <option value="10">octubre</option>
    <option value="11">noviembre</option>
    <option value="12">dicienbre</option>
</select>

<select name="anio" id="anio" onchange="calendario()">
    <?php for ($i = 1975; $i <=2024; $i++) {
        echo "<option value=".$i.">$i</option>";
}?>
</select>
</form>