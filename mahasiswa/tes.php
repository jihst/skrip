<script type="text/javascript">
function showfield(name){
  if(name=='Other')document.getElementById('div1').innerHTML='Other: <input type="text" name="other" />';
  else document.getElementById('div1').innerHTML='';
}
</script>

<select name="travel_arriveVia" id="travel_arriveVia" onchange="showfield(this.options[this.selectedIndex].value)">
<option selected="selected">Please select ...</option>
<option value="Plane">Plane</option>
<option value="Train">Train</option>
<option value="Own Vehicle">Own Vehicle</option>
<option value="Other">Other</option>
</select>
<div id="div1"></div>
  