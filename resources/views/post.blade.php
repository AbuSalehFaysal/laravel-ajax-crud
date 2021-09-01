<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Infinite Post</title>
  </head>
  <body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Infinite Scroll pagination</h2>
                    <div class="col-md-12" id="post-data">
                        @include('data');
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="ajax-load text-center" style="display: none;">
        <p>
            <img src="{{asset('images/2.gif')}}" alt="" /> Loading More Post
        </p>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script>
        function loadMoreData(page){
            $.ajax({
                url: '?page='+page,
                type: 'get',
                beforeSend: function(){
                    $(".ajax-load").show();
                }
            })
            .done(function(data){
                if (data.html == " ") {
                    $(".ajax-load").html("No More data found");
                    return;
                }
                $(".ajax-load").hide();
                $("#post-data").append(data.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError){
                alert("Server is not responding!");
            });
        }

        let page = 1;
        $(window).scroll(function(){
            if($(window).scrollTop()+$(window).height() >= $(document).height()){
                page++;
                loadMoreData(page);
            }
        });
    </script>

    
  </body>
</html>
