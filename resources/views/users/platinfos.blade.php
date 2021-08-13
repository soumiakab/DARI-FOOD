@extends('layouts.app')

@section('content')
              <div class="row justify-content-center">
                  <!-- Plat Details -->
                  <div class="col-12 col-lg-8 col-xl-9">
                      <div class="row p-lg-5 details">
                              <img class="platImage mb-3" src="{{ asset('resource/'.$plat->imag) }}" alt="plat image">

                          <div class="description ">
                          <h4 class="nomplat">{{$plat->name}}</h4>
                          <h6 class="prix">Prix :{{$plat->price}} dh</h6>

                              <p>{{$plat->description}}
                                </p>

                                <p class="btn-holder"><a href="{{ route('add',['id'=>$plat->id,'qt'=>1]) }}"  class="btn btn-danger btn-block text-center" role="button">Ajouter au panier</a> </p>

                          </div>
                      </div>
                      <!-- Comment -->
                      <div class=" ">
                          <div class="row">
                          <form action="{{ route('comment') }}" method="POST" style="width:100%;">
                            @csrf
                                      <input type="text" name="id" value="{{$plat->id}}" class="form-control" hidden >

                                      <div class="form-group d-flex m-5"><input type="text" name="comment" class="form-control" > <input type="submit" value="commenter" class="btn btn-primary col-2"></div>
                                      </form>
                              </div>
                          <h4 class="mt-2">Commentaires</h4>

                          <ul style="list-style:none;">
                          @foreach($plat->comments()->sortDesc() as $comment)
                              <li class="">
                                  <!-- Commentaire  -->
                                  <div class="d-flex">
                                      <!-- user image -->
                                      <div class="">
                                          <img src="{{ asset('ressources/'.$comment->user()->photo) }}" width="30vw" alt="author">
                                      </div>
                                      <!-- Commentaire contenu -->
                                      <div class="ml-3">
                                          <div class="d-flex">
                                              <span>{{ $comment->user()->username}}</span>
                                          </div>
                                          <p>{{$comment->comment}}
                                            </p>
                                      </div>
                                  </div>
                              </li>
                        @endforeach

                          </ul>
                      </div>


                  </div>

                  <!-- Chef infos -->
                  <div class="col-12 col-sm-9 col-md-6 col-lg-4 col-xl-3 noschefs">
                    <div class="card d-flex flex-column align-items-center justify-content-center mt-5 mx-auto" style="width: 90%;">
                        <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                            <div class="img-container rounded-circle"> <img src="{{ asset('ressources/'.$plat->user->photo) }}" alt="" class="rounded-circle"> </div>
                            <div class="h3">chef {{$plat->user->firstname}}</div>
                            <p class="designation text-muted text-uppercase">{{substr($plat->user->description,0,10)}}...</p>
                            <a  href="{{route('profilchef',$plat->user->id)}}" class="btn btn-danger">profil</a>
                        </div>

                    </div>
                  </div>
              </div>
@endsection
