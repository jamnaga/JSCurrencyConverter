<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

  <title>Currency converter widget</title>
  <link rel="stylesheet" href="assets/app/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>

<body <?php 
if($_GET['color']){
  echo 'style="background-color: #'.$_GET['color'].'"';
}
?>>
  <div id="widget">
    <div class="d-flex justify-content-center">
      <div class="card" style="margin: 12px;">
        <div class="card-body">
          <h5 class="card-title">Currency converter</h5>
          <div class="row">
            <div class="input-group">
              <div class="mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary dropdown-toggle curr" type="button" data-toggle="dropdown"
                    id="from_curr" aria-haspopup="true" aria-expanded="false">From</button>
                    
                  <div class="dropdown-menu">
                    <div class="px-4 py-2">
                      <input type="search" class="form-control" id="search1" placeholder="Search" autofocus="autofocus">
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary dropdown-toggle curr" type="button" data-toggle="dropdown"
                    id="to_curr" aria-haspopup="true" aria-expanded="false">To</button>
                  <div class="dropdown-menu">
                    <div class="px-4 py-2">
                      <input type="search" class="form-control" id="search2" placeholder="Search" autofocus="autofocus">
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-6">
                <input type="number" id="amount" class="form-control" placeholder="Amount" required="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="mb-3">
              <button class="btn btn-primary" id="go_btn">Convert</button>
            </div>
            <div class="mb-9">
              <input type="text" id="result" class="form-control" placeholder="Result" disabled="">
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
  integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/app/main.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>