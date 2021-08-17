@extends('layouts.backend')

@section('content')
<div class="card">
    <div class="card-body">
        <div id="chart4"></div>
    </div>
</div>
<h6 class="mb-0 text-uppercase">Donught Chart</h6>
<hr />
<div class="card">
    <div class="card-body">
        <div id="chart9"></div>
    </div>
</div>

<label for="myCheck">Checkbox:</label>
<input type="checkbox" id="myCheck" onclick="myFunction()">

<p id="text" style="display:none">Checkbox is CHECKED!</p>

<script>
    function myFunction() {
        var checkBox = document.getElementById("myCheck");
        var text = document.getElementById("text");
        if (checkBox.checked == true) {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }

</script>

@endsection
