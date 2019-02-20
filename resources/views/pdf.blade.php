<!-- pdf.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
      <tr>
        <td>
          {{$order->id}}
        </td>
        <td>
          {{$order->id_user}}
        </td>
      </tr>
      <tr>
        <td>
          {{$order->totalprice}}
        </td>
        <td>
          {{$order->date}}
        </td>
      </tr>
    </table>
  </body>
</html>