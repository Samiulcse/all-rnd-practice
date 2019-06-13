<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <style>
        div#image-gallary img {
            height: 100% !important;
            width: 100% !important;
        }
    </style>
</head>

<body>

    <!-- <ul id="title">

    </ul> -->

    <div class="container">
        <div class="row" id="image-gallary">
            
        </div>
    </div>

    <script>
        // Make a request for a user with a given ID
        // axios.get('https://jsonplaceholder.typicode.com/posts')
        axios.get('https://jsonplaceholder.typicode.com/photos')
            .then(function(response) {
                // handle success

                var data = response.data;

                console.log(data);
                $.each(data, function(k, v) {
                    // console.log(v.title)
                    // var title = '<li>'+ v.title +'</li>'
                    // $('#title').append(title);

                    var imageGallary = '<div class="col-md-4 my-3"> <img src="' + v.url + '"/></div>'

                    $('#image-gallary').append(imageGallary);


                });


            })
            .catch(function(error) {
                // handle error
                console.log(error);
            })
            .finally(function() {
                // always executed
            });
    </script>
</body>

</html>