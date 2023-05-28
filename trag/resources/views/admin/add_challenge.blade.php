

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
                        <h4>Add Challenge</h4>
                        <hr>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12">
                                
                                <form action="" method ="post">


                                    @csrf

                                    <div class="row">

                                                <div class="col-md-12 mb-2">

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Title</label>
                                                        <input type="text" class="form-control"  name = "title" required>
                                                    </div>

                                                </div>


                                                <div class="col-md-12 mb-2">

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Difficalty</label>
                                                   

                                                    <select name="dif" class="form-control" required>
                                                        <option value="0">Easy</option>
                                                        <option value="1">Medium</option>
                                                        <option value="2">Hard</option>
                                                    </select>


                                                </div>

                                                </div>


                                                <div class="col-md-12 mb-2">

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Streak</label>
                                                        <input type="number" class="form-control"  name = "streak" required>
                                                    </div>

                                                </div>


                                                <div class="col-md-12 mb-2">

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Amount</label>
                                                        <input type="number" class="form-control"  name = "amount" required>
                                                    </div>

                                                </div>


                                                <div class="col-md-12 mb-2">

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">QC</label>
                                                        <input type="number" class="form-control"  name = "qc" required>
                                                    </div>

                                                </div>

                                                <div class="col-md-12 mb-2">

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Coin Type</label>
                                                        <select name="coin" id="coin" class="form-control">
                                                            <option value="BITP">BITP</option>
                                                            <option value="BUSD">BUSD</option>
                                                            <option value="USDT">USDT</option>
                                                        </select>
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