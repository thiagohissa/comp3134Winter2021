<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" id="theForm" action="csfr.php">
    <input type="hidden" name="username" value="host">
    <input type="hidden" name="password" value="pass">
    <input type="hidden" name="confirmation" value="random">
</form>

<script>
    document.getElementById('theForm').submit();
</script>

</body>
</html>