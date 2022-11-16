<!doctype html>
<html lang="en">
  <head>
    <style>
        svg.w-5.h-5 {
    display: none;
}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Companies</title>
  </head>
  <body>



     <div class="container">
        <h1>All Companies</h1>



        <table class="table">
            <div class="col-md-9 mb-3">
                <form action="" class="form-inline">
                    <input class="form-control mr-sm-2" type="search" name="name" value="" placeholder="Search" aria-label="Search" style="width: 60%">
                    <div>
                      <select name="cro" id="">
                        <option value="">select cro</option>
                        @foreach ($companies as $company)
                            <option value="{{$company->cro}}">{{$company->cro}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div>
                      <select name="status" id="">
                        <option value="">select status</option>
                        @foreach ($companies as $company)
                            <option value="{{$company->status}}">{{$company->status}}</option>
                        @endforeach
                      </select>
                    </div>

                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
            </div>

            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">CRO</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                  <tr>
                    <th scope="row">{{$company->id}}</th>
                    <td>{{ $company->name}}</td>
                    <td>{{$company->cro}}</td>
                    <td>{{ $company->status }}</td>
                  </tr>
                @endforeach

            </tbody>
          </table>
          {{ $companies->links(); }}
     </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>
