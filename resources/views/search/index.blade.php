<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Poppins:700" rel="stylesheet"/>
    <link href="{{asset('Search/css/main.css')}}" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<div class="s011">
    <form>
        <fieldset>
            <legend>Wyszukiwarka opiekunów</legend>
        </fieldset>
        <div class="inner-form">

            <div class="main-form" id="main-form">
                <div class="row">
                    <div class="input-wrap">

                        <div class="input-field">
                            <label>Wyszukaj po nazwie</label>
                            <input type="text" placeholder="imię,nazwisko , tutuł"/>
                        </div>
                    </div>
                </div>
                <div class="row second">
                    <div class="input-wrap">
                        <div class="icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"></path>
                            </svg>
                        </div>
                        <div class="input-field">
                            <label>Data rozpoczęcia pracy</label>
                            <input class="datepicker" type="text" placeholder="mm/dd/yy"/>
                        </div>
                    </div>
                    <div class="input-wrap">
                        <div class="icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"></path>
                            </svg>
                        </div>
                        <div class="input-field">
                            <label>Data zakonczenia pracy</label>
                            <input class="datepicker" type="text" placeholder="mm/dd/yy"/>
                        </div>
                    </div>
                    <div class="input-wrap">
                        <div class="icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                            </svg>
                        </div>
                        <div class="input-field">
                            <label>Dzielnica</label>
                            <div class="input-select">
                                <select data-trigger="" name="choices-single-defaul">
                                    <option>1 adult</option>
                                    <option>2 adults</option>
                                    <option>3 adults</option>
                                    <option>4 adults</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row third">
                    <div class="input-checkbox-group">
                        <div class="input-checkbox">
                            <input id="yes" type="checkbox" name="dogs" value="yes" checked="checked"/>
                            <label for="dogs">Opieka Nad Zwierzętami
                            </label>
                        </div>
                        <div class="input-checkbox">
                            <input id="no" type="checkbox" name="customer" value="no"/>
                            <label for="no">Opieka Nad Większą Ilością Osób</label>
                        </div>
                        <div class="input-checkbox">
                            <input id="no" type="checkbox" name="customer" value="no"/>
                            <label for="no">Wsparcie W Nauce
                            </label>
                        </div>

                    </div>

                </div>
                <div class="row fourth">
                    <div class="input-checkbox-group">
                        <div class="input-checkbox">
                            <input id="yes" type="checkbox" name="customer" value="yes" checked="checked"/>
                            <label for="yes">Organizowanie Zabawy</label>
                        </div>
                        <div class="input-checkbox">
                            <input id="no" type="checkbox" name="customer" value="no"/>
                            <label for="no">Cena Za Godzinę Stała Przez Całą Dobę
                            </label>
                        </div>
                        <div class="input-checkbox">
                            <input id="no" type="checkbox" name="customer" value="no"/>
                            <label for="no">Kucharz</label>
                        </div>


                    </div>

                </div>
                <div class="row third">
                    <div class="input-checkbox-group">
                        <div class="input-checkbox">
                            <input id="yes" type="checkbox" name="dogs" value="yes" checked="checked"/>
                            <label for="dogs">Wychowawca kolonijny
                            </label>
                        </div>
                        <div class="input-checkbox">
                            <input id="no" type="checkbox" name="customer" value="no"/>
                            <label for="no">Wieloletnie Doświadczeni
                            </label>
                        </div>
                        <div class="input-checkbox">
                            <input id="no" type="checkbox" name="customer" value="no"/>
                            <label for="no">Opieka Nad Niepełnosprawnymi

                            </label>
                        </div>

                    </div>
                    <div class="row third">
                        <div class="input-checkbox-group">
                            <div class="input-checkbox">
                                <input id="yes" type="checkbox" name="dogs" value="yes" checked="checked"/>
                                <label for="dogs">Opieka W Nocy

                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input id="no" type="checkbox" name="customer" value="no"/>
                                <label for="no" >Wsparcie psychologiczne
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input id="no" type="checkbox" name="customer" value="no"/>
                                <label for="no">Opiekunka

                                </label>
                            </div>

                        </div>
                        <div class="row third">
                            <div class="input-checkbox-group">
                                <div class="input-checkbox">
                                    <input id="yes" type="checkbox" name="dogs" value="yes" checked="checked"/>
                                    <label for="dogs">Trudna Młodzież
                                    </label>
                                </div>
                                <div class="input-checkbox">
                                    <input id="no" type="checkbox" name="customer" value="no"/>
                                    <label for="no">Praca w języku angielskim
                                    </label>
                                </div>
                                <div class="input-checkbox">
                                    <input id="no" type="checkbox" name="customer" value="no"/>
                                    <label for="no">Opiekun

                                    </label>
                                </div>

                            </div>
                <div class="row third">
                    <button class="btn-search" type="button">Search</button>
                </div>
            </div>
        </div>
                </div></div> </div></form>
</div>
<script src="{{asset('Search/js/extention/choices.js')}}"></script>
<script>
    const choices = new Choices('[data-trigger]',
        {
            searchEnabled: false,
            itemSelectText: '',
        });

</script>
<script src="{{asset('Search/js/extention/flatpickr.js')}}"></script>
<script>
    flatpickr(".datepicker",
        {
            dateFormat: "m/d/y"
        });
    var btnTypes = document.querySelectorAll('.travel-type-wrap .item')
    var mainForm = document.getElementById('main-form')
    for (let i = 0; i < btnTypes.length; i++) {
        btnTypes[i].addEventListener('click', function () {
            for (let i = 0; i < btnTypes.length; i++) {
                btnTypes[i].classList.remove('active')
            }
            btnTypes[i].classList.add('active')
            let className = 'type' + i
            mainForm.className = `${className} main-form`
        })
    }

</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
