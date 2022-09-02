<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>

    @foreach ($news as $n)
        <li>{{$n->name}}<li>
    @endforeach
    <div class= "container">
    <div class = "row">
        <div class="coll md-3">
        </div>
    <div class = "col-md-4">
        <select class="form-select" name ="active" id = "status" aria-label="Default select example">
            <option selected value="<?=null ?>">Open this select menu</option>
            <option value="0">Passiv</option>
            <option value="1">Aktiv</option>
        </select>
    </div>
    </div>
</div>
<tbody 
id="list-news">
</tbody>
</html>

<script>
$('document').ready(function(){
    $.ajax({

        method  : "GET",
        url     : "{{ route('news-list')}}",
        success  : function(response){
            $('#list-news').html(response);
        }
    });

    $("#status").on("change", function(){
        alert(this.value)
        $.ajax({

            method  : "GET",
            url     : "{{ route('news-list')}}",
            data    : {status :this.value},
            success  : function(response){
                $('#list-news').html(response);
            }
            });
    });
});

</script>
