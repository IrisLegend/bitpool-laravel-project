

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



</head>
<body>


    <div class="container mt-4">
        <div class="row">
            

                <div class="card">

                    <div style="padding:1rem; text-align:center">
                        <h4>Home Bottom Banner</h4>
                        <hr>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12">
                                
                                <form action="" method ="post" enctype="multipart/form-data">


                                    @csrf

                                        <div class="row">

                                                <div class="col-md-12 mb-2">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Url</label>
                                                        <input type="text" class="form-control"  value = "{{$data->value2}}" name = "url" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <img src="{{$data->value}}" alt="" style = "width:40%">
                                                </div>

                                                <div class="col-md-12 mb-2">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Image</label>
                                                        <input type="file" class="form-control"  name = "file">
                                                    </div>
                                                </div>


                                                <div class="col-md-12 mb-2">
                                                    <div class="form-group">
                                                        <button class="btn btn-info">Submit</button>
                                                    </div>
                                                </div>
                                        
                                        </div>

                

                                </form>

                            </div>
                        </div>


                    </div>
                </div>


        </div>
    </div>




    
</body>
</html>