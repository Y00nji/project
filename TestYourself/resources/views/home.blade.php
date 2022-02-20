@extends('layouts.app')

@section('content')
<div class="tab">
    
  <button class="tablinks" onclick="openCity(event, 'my_page')">Моя страница</button>
  <button class="tablinks" onclick="openCity(event, 'book')">Подготовка</button>
  <button class="tablinks" onclick="openCity(event, 'tests')">Тесты</button>
  <button class="tablinks" onclick="openCity(event, 'statistics')">Статистика</button>
</div>

<div id="my_page" class="tabcontent">
  <h3> Моя страница</h3>
  <p>Твое хмурое личико</p>
</div>

<div id="book" class="tabcontent">
  <h3>Подготовка</h3>
  <p>Выучи это и будет тебе счастиё</p>
</div>

<div id="tests" class="tabcontent">
  <h3>Тесты</h3>
  <p>Рискни</p>
</div>

<div id="statistics" class="tabcontent">
  <h3>Статистика</h3>
  <p>У тебя 0/100, смирись</p>
</div>

<button type="submit" class="btn button">
    {{ __('Выход') }}
</button>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<script>
    openCity(event, 'my_page');

    function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
    
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
@endsection
