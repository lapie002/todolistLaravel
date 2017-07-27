@extends('layouts')
       @section('content')
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
        @endsection('content')
