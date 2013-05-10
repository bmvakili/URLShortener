<?php
include ("tconfig.php");
?>
<!DOCTYPE html><html><head><title>Tiny URL</title>
<script type="tetx/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="t.js"></script>
<link rel="stylesheet" href="t.css" />
</head>
<body>
<label for="tURL" >Paste a long URL in this text box</label><br/><input type="text" id="tURL" />
<br/>
<label for="tTag" ><? echo("${url_base}") ?></label><input type="text" id="tTag" />
<br/>
<div id="shorten">
</div>
<br/>
<label for="result">Press Enter to see result</label><input type="text" id="result">
</input>
</body>
</html>
