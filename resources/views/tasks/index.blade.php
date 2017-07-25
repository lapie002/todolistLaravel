<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ToDo</title>

        <!-- Awsome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css.map">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/FontAwesome.otf">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.eot">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.svg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2">



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles pour la Modale -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

          table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
          }

          td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
          }

          tr:nth-child(even) {
              background-color: #dddddd;
          }

          .button-create {
              background-color: #4ca64c;
              border: none;
              color: white;
              padding: 10px 26px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              cursor: pointer;
          }

          .button-update {
              background-color: #ffc04c;
              border: none;
              color: white;
              padding: 10px 26px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              cursor: pointer;
          }

          .button-delete {
              background-color: #ff3232;
              border: none;
              color: white;
              padding: 10px 26px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              cursor: pointer;
          }

          .button-modal {
              background-color:#6666ff;
              border: none;
              color: white;
              padding: 10px 26px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              cursor: pointer;
          }

          .button-undone{
              background-color:#00094c;
              border: none;
              color: white;
              padding: 10px 26px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              cursor: pointer;
          }

          .button-check{
              background-color:#31B0D5;
              border: none;
              color: white;
              padding: 10px 26px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              cursor: pointer;
          }

          .ourtaskundone
          {
            text-decoration: none;
          }

          .ourtaskdone
          {
            text-decoration: line-through;
          }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif -->

            <div class="content">
                <div class="title m-b-md">
                    To do list
                </div>

                <div class="links">
                    <table>
                      <tr>
                        <th>Task</th>
                        <th>Update</th>
                        <th>delete</th>
                        <th>Status</th>
                      </tr>

                      @foreach($tabTasks as $tabTask)
                        <tr>
                          <!-- <td><a href="/tasks/changesatus/{{ $tabTask->id }}" class="ourtaskundone">{{$tabTask->title}}</a></td>
                          <td> -->
                          @if ($tabTask->confirmed === 1)
                            <td><a href="/tasks/changesatus/{{ $tabTask->id }}" class="ourtaskdone">{{$tabTask->title}}</a></td>
                            <td>
                          @else
                            <td><a href="/tasks/changesatus/{{ $tabTask->id }}" class="ourtaskundone">{{$tabTask->title}}</a></td>
                            <td>
                          @endif

                          <!-- <a href="/tasks/gettask/{{ $tabTask->id }}">
                            <button  class="button-update">Mise ajour</button>
                          </a> -->
                          <a class="button-update" href="/tasks/gettask/{{ $tabTask->id }}">
                            <i class="fa fa-pencil-square fa-lg" aria-hidden="true"></i>
                          </a>
                        </td>
                        <!-- <td><a href="/tasks/deletetask/{{ $tabTask->id }}">
                            <button class="button-delete">Supprimer</button>
                            </a>
                        </td> -->
                        <td>
                          <!-- <button onclick="document.getElementById('{{ $tabTask->id }}').style.display='block'" class="button-delete">Supprimer</button> -->
                            <a onclick="document.getElementById('{{ $tabTask->id }}').style.display='block'" class="button-delete"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>



                          <div id="{{ $tabTask->id }}" class="w3-modal">
                              <div class="w3-modal-content">
                                <div class="w3-container">
                                  <span onclick="document.getElementById('{{ $tabTask->id }}').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                  <p>Etes vous sur de vouloir supprimer la tache {{ $tabTask->id }} ?</p>
                                  <form class="" action="/tasks/deletetaskform/" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $tabTask->id }}">
                                    <button type"submit" class="button-modal">Confimer</button>
                                    <a href="/tasks"><button type="button" class="button-delete" name="button">Annuler</button></a>
                                  </form>
                                </div>
                              </div>
                          </div>
                        </td>
                        @if ($tabTask->confirmed === 1)
                            <td><a class="button-check" href="/tasks/changesatus/{{ $tabTask->id }}"><i class="fa fa-check-square fa-lg" aria-hidden="true"></i></a></td>
                        @else
                            <td><a class="button-undone" href="/tasks/changesatus/{{ $tabTask->id }}"><i class="fa fa-times fa-lg" aria-hidden="true"></i></a></td>
                        @endif
                        </tr>
                      @endforeach
                    </table>
                    <br>
                    <a href="/tasks/create/">
                        <button class="button-create">Ajouter un todo</button>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
