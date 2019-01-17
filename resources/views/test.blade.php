
<html>
<head>

 <style>
 #dummy {
  min-width: 200px;
  min-height: 200px;
  max-width: 200px;
  max-height: 200px;
  background-color: #fff000;
 }
 </style>
</head>
<body>
 <div id="dummy"></div>

 <form>
  <input type="submit" value="Remove DUMMY" onclick="removeDummy();return false; "/>
 </form>
</body>

<script type="text/javascript">
function removeDummy() {
  var elem = document.getElementById('dummy');
  elem.parentNode.removeChild(elem);
  return false;
}
</script>
