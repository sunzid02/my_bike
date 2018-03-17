<!DOCTYPE html>
<html lang="en">
<head>
  <title>MY BIKE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery-3.2.1.js"></script>
  <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
  <script type="text/javascript" src="script.js"></script>

  <link rel="stylesheet" href="/jquery-ui/jquery-ui.css">
  <link rel="stylesheet" href="/jquery-ui/jquery-ui.structure.css">
  <link rel="stylesheet" href="/jquery-ui/jquery-ui.theme.css">

  <style media="screen">
    td,th,table{
      text-align: center;
      font-size: 120%;
    }

    .ui-datepicker .ui-datepicker-title select {
      color: #002;
    }

    body{
      /* The image used */
      background: url("/images/table_background.jpg");

      /* Full height */
      height: 100%;


    }
    table{
      background-color: white;
      font-size: 90%;
    }
  </style>
</head>

<body>




<div class="container" >



    <h2 align="center">
      <h3> NO DATA FOUND ( {{ $fromDate }} - {{ $toDate }} )</h3>
    </h2>



    <table class="table" bgcolor="cyan">
      <tbody>
        <!-- search by date -->
        <form class="" action="{{ route('amount.searchByDate') }}" method="get">
          {{csrf_field()}}
          <tr>
            <td>
              <label for="datepicker">From:</label>
              <input id="datepicker" class="form-control"  placeholder="yy-mm-dd" name="fromDate"  required>
            </td>
            <td>
              <label for="datepicker2">To:</label>
              <input id="datepicker2" class="form-control"  placeholder="yy-mm-dd" name="toDate"  required>
            </td>
            <td style="padding-top:32px">
              <button type="submit" formmethod="post" class="btn btn-primary"><i class="fa fa-search "></i> Search</button>
            </td>
          </tr>

          <tr>

          </tr>
        </form>

      </tbody>
    </table>


    <a href="{{ route('amount.index') }}"><button type="post" class="btn btn-primary" style="margin-top:3%"><i class="fa fa-plus "></i> Add New Information</button></a>
    <a href="{{ route('amount.info') }}"><button type="get" class="btn btn-primary" style="margin-top:3%"><i class="fa fa-plus "></i> All Information</button></a>

    <!-- all info -->
    <table class="table" bgcolor="#00FF00" style="margin-top: 1%">
      <tr>

      </tr>

      <br><br>

      <thead>
        <tr>
          <th> ID </th>
          <th> Date </th>
          <th> Product Name </th>
          <th> Description </th>
          <th> Octen Amount(Litre) </th>
          <th> Octen Price </th>
          <th> Other Price </th>
          <th> Total Price </th>
          <th> Action </th>

        </tr>
      </thead>
      <tbody>



            <tr>
              <td> empty </td>
              <td> empty </td>
              <td> empty </td>
              <td> empty </td>
              <td> empty </td>
              <td> empty </td>
              <td> empty </td>
              <td> empty </td>
              <td> empty </td>
            </tr>

      </tbody>
      <br>
    </table>



  </div>


  </div>


</body>
</html>

<script type="text/javascript">
  $(document).ready(function () {
    //date format arrange according to database
      $("#datepicker, #datepicker2").datepicker({ dateFormat: "yy-mm-dd" });

  });
</script>
