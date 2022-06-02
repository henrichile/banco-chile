<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificado</title>
    <style>
        body{font-family: 'Helvetica';}
        p{float: left;width: 100%;}
    </style>
</head>
<body>
 <table style="width:94%;margin: 0 3%;">
  
  <tr>
    <td>
        <p>Estimad@: <?php echo e($nombre); ?></p>
        <p>Usted se ha clasificado para la siguiente ronda del concurso.</p>
    </td>
  </tr>
  <tr>
    <td>
        <span style="width: 100%; float: left;margin-bottom: 10px;">Saludos equipo</span>
    </td>
  </tr>
</table>
    
</body>
</html><?php /**PATH /home/banco/public_html/banco/resources/views/mails/clasificado.blade.php ENDPATH**/ ?>