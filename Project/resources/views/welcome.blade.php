<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1></h1>

    <div class="col-5 background-color: lightgrey;" style="height: auto; padding: 20px;">
           <h1 style="font-size: xx-large; text-align: center;">Student form</h1>
            <form method="post" action="{{url('/')}}/register" class="row g-3" id="Input" style="height: auto;margin: top 30px ; border: 2px solid black; padding: 20px; margin-top: 20px; width: 100%;">
                 @csrf
                <div class="col-md-6">
                    <label for="F_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="F_name">
                    <Span class="text-danger">@error('F_name'){{$message}}@enderror</Span>
                </div>
                <div class="col-md-6">
                    <label for="L_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="L_name">
                </div>
                <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
  <input type="email" name="femail" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
                <div class="col-12">
                    <label for="faddress" class="form-label">Address </label>
                    <input type="text" class="form-control" name="faddress" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                    <label for="fage" class="form-label">Age</label>
                    <input type="text" class="form-control" name="fage">
                </div>
                <div class="col-md-4">
                    <label for="fgender" class="form-label">Gender</label>
                    <select name="fgender" class="form-select" >
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="fclass" class="form-label">Class</label>
                    <input type="text" style='width: 70px;' class="form-control" name="fclass">
                </div>
                <div class="col-12">
                    <button id="btn_submit" type="submit" class="btn btn-primary">submit</button>
                </div>

            </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>