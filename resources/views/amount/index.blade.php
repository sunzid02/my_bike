<!DOCTYPE html>
<html lang="en">
<head>
  <title>MY BIKE</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}">
  <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="jquery-3.2.1.js"></script>
  <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
  <script type="text/javascript" src="script.js"></script>

  <link rel="stylesheet" href="/jquery-ui/jquery-ui.css">
  <link rel="stylesheet" href="/jquery-ui/jquery-ui.structure.css">
  <link rel="stylesheet" href="/jquery-ui/jquery-ui.theme.css">
  <style media="screen">
  body, html {
      height: 100%;
      margin: 0;
  }

  .bg {
      /* The image used */
      /* background: url("../images/background_image.jpg") ; */



      /* Full height */
      height: 100%;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
  }

  .container
  {
    margin-left: 80%;
  }
  .ff{
    width: 20%;
  }
  .ui-datepicker .ui-datepicker-title select {
    color: #000;
  }


  </style>
</head>
<body>


  <div class="bg" style="background-image: url('{{ asset('images/background_image.jpg') }}')" >

    <div class="container" >
      <h2>Bike Cost Information</h2>

      <!-- ff is form -->
      <div class="ff">
        <form method="post" id="form_design">
          {{csrf_field()}}


          <input type="hidden" name="id" value="">

          <!-- date -->
          <div class="form-group">
            <label for="date">Date:</label>
            <input id="datepicker" class="form-control"  placeholder="yy-mm-dd" name="date"  required>
          </div>

          <!-- product name -->
          <div class="form-group">
            <label for="product">Product Name</label>
            <input type="product" class="form-control" id="product" placeholder="Enter product" name="product">
          </div>

          <!-- Description -->
          <div class="form-group" >
            <label for="description">Description</label>
            <input type="text" style="height:20%; " class="form-control" id="description"  placeholder="Enter description" name="description">
          </div>


          <!-- Octen -->
          <div class="form-group" >
            <label for="octen_select" > <h4 style="font-weight: bold">Octen (In Litre)</h4> </label>
            <select class="form-control" name="octen_select" id="octen_select" required >
              <option value="" required>Select octen's amount</option>
                @for ($i=0; $i<16; $i++ )
                  <option value={{$i}}> {{$i}} Litre</option>
                @endfor
            </select>
          </div>

          <!-- Amount of Octen -->
          <div class="form-group" >
            <label for="amount"> <h4 style="font-weight: bold;">Octen TK(Per Litre 89tk)</h4> </label>
            <input type="number" class="form-control" value="0" id="amount"  name="amount" readonly>

          </div>

          <!-- others price -->
          <div class="form-group">
            <label for="other_price"> <h4 style="font-weight: bold"> Others Price (From Description)</h4> </label>
            <input type="number" class="form-control" name="other_price" value="0" id="other_price">
          </div>

          <!-- total price -->
          <div class="form-group">
            <label for="total_price"> <h4 style="font-weight: bold"> Total Price </h4> </label>
            <input type="number" class="form-control" name="total_price" value="0" id="total_price" readonly>
          </div>

          <!-- calculate -->
          <button type="button" class="btn btn-primary" id="calculateButton">Calculate</button>
          <button type="submit" class="btn btn-primary">Insert</button>
        </form>

      </div>
        <br>
        <a href="{{ route('amount.info') }}">  <button type="submit" class="btn btn-success">See All information</button></a>
      </div>

    </div>

</body>
</html>

<script type="text/javascript">
  $(document).ready(function () {

    // calculate octen total amount in tk
    $('#octen_select').on('click', function () {
      var octenAmount = parseInt($('#octen_select').val());
      var oneLitrePrice = 89;

       octenTotalPrice = octenAmount*oneLitrePrice + 0;
      $('#amount').val(octenTotalPrice);

    });

    // calculate Total price
    $('#calculateButton').on('click',function () {
      var otherPrice = parseInt($('#other_price').val());

      totalPrice = otherPrice + octenTotalPrice;
      // alert(totalPrice);
      $('#total_price').val(totalPrice);
    });

    //date format arrange according to database
      $("#datepicker").datepicker({ dateFormat: "yy-mm-dd" });

  });
</script>
