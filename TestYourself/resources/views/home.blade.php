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
    <p>
      <div class="row mb-3">
            <label for="Фамилия" class="col-md-4 col-form-label text-md-end">{{ __('Фамилия') }}</label>

            <div class="col-md-6">
                <input id="Фамилия" type="text" class="form-control @error('Фамилия') is-invalid @enderror" name="Фамилия" value="{{ Auth::user()->Фамилия }}" required autocomplete="on" autofocus>

                @error('Фамилия')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="Имя" class="col-md-4 col-form-label text-md-end">{{ __('Имя') }}</label>

            <div class="col-md-6">
                <input id="Имя" type="text" class="form-control @error('Имя') is-invalid @enderror" name="Имя" value="{{ Auth::user()->Имя }}" required autocomplete="on" autofocus>

                @error('Имя')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="Отчество" class="col-md-4 col-form-label text-md-end">{{ __('Отчество') }}</label>

            <div class="col-md-6">
                <input id="Отчество" type="text" class="form-control @error('Отчество') is-invalid @enderror" name="Отчество" value="{{ Auth::user()->Отчество }}" autocomplete="on" autofocus>

                @error('Отчество')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail') }}</label>

            <div class="col-md-6">
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="on" disabled autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="Пол" class="col-md-4 col-form-label text-md-end">{{ __('Пол') }}</label>

            <div class="col-md-6">
                <select class="form-select" id="Пол" value="{{ Auth::user()->Пол }}" required>
                    <option>Не указан</option>
                    <option>М</option>
                    <option>Ж</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label for="Дата_рождения" class="col-md-4 col-form-label text-md-end">{{ __('Дата рождения') }}</label>

            <div class="col-md-6">
                <p><input class="form-select" id="Дата_рождения" type="date" value="{{ Auth::user()->Дата_рождения }}" name="Дата_рождения" pattern="[0-9]{2}\.[0-9]{2}\.[0-9]{4}"></p>
            </div>
        </div>

        <div class="row mb-3">
            <label for="Гражданство" class="col-md-4 col-form-label text-md-end">{{ __('Гражданство') }}</label>

            <div class="col-md-6">
                <select class="form-select" id="Гражданство" >
                @foreach($Гражданство_список as $Гражданство)
                    <option value="{{ $Гражданство->idГражданство }}">{{ $Гражданство->Гражданство }}</option>
                @endforeach
                    
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label for="Вид_удостоверения" class="col-md-4 col-form-label text-md-end">{{ __('Вид удостоверения') }}</label>

            <div class="col-md-6">
                <select class="form-select" id="Вид_удостоверения" >
                @foreach($Виды_удостоверений_список as $Вид_удостоверения)
                    <option value="{{ $Вид_удостоверения->idВид_удостоверения }}">{{ $Вид_удостоверения->Вид_удостоверения }}</option>
                @endforeach
                    
                </select>
            </div>
        </div>

        
        <div class="row mb-3">
            <label for="Серия_паспорта" class="col-md-4 col-form-label text-md-end">{{ __('Серия паспорта') }}</label>

            <div class="col-md-6">
                <input id="Серия_паспорта" type="text" class="form-control" name="Серия_паспорта" value="{{ Auth::user()->Серия_паспорта }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Номер_паспорта" class="col-md-4 col-form-label text-md-end">{{ __('Номер паспорта') }}</label>

            <div class="col-md-6">
                <input id="Номер_паспорта" type="text" class="form-control" name="Номер_паспорта" value="{{ Auth::user()->Номер_паспорта }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Кем_выдан_паспорт" class="col-md-4 col-form-label text-md-end">{{ __('Кем выдан паспорт') }}</label>

            <div class="col-md-6">
                <input id="Кем_выдан_паспорт" type="text" class="form-control" name="Кем_выдан_паспорт" value="{{ Auth::user()->Кем_выдан_паспорт }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Дата_выдачи_паспорта" class="col-md-4 col-form-label text-md-end">{{ __('Дата выдачи паспорта') }}</label>

            <div class="col-md-6">
                <input id="Дата_выдачи_паспорта" type="text" class="form-control" name="Дата_выдачи_паспорта" value="{{ Auth::user()->Дата_выдачи_паспорта }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="СНИЛС" class="col-md-4 col-form-label text-md-end">{{ __('СНИЛС') }}</label>

            <div class="col-md-6">
                <input id="СНИЛС" type="text" class="form-control" name="СНИЛС" value="{{ Auth::user()->СНИЛС }}">
            </div>
        </div>

        
    </p>
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
