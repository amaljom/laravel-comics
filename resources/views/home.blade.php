@extends('layouts.main')

@section('main-content')
<main>
    
    <!-- QUA INSERIAMO L'IMMAGINE -->
    <div class="container black-band">  </div>
    <!-- CREO UN DIV PER CONTENERE TUTTI GLI ELEMENTI CHE DOVRO INSERIRE COME COMPONENT -->
    
    <section class="comics-container">
        <div class="posizionamento-elementi">
            <div class="button-current-series">
                <a @click.prevent href="#"> <p>CURRENT SERIES</p> </a>
            </div>
           <div class="wrapper-comics">
                @foreach($comics as $comic)
                    <div class="width-img-wrapper">
                        <img class="img-wrapper" src="{{ $comic-> image }}" alt="">
                        <p> {{ $comic->title }}</p>
                    </div>
                @endforeach
           </div>
           <div class="button-loader">
               <a @click.prevent href="#"><p>Load more</p></a> 
           </div>
        </div>
    </section>
    <!-- div azzurro cche richiamo con un secondo component -->
    <div class="content-azzurro ">
            <div class="posizionamento-elementi content-container content-container-images">
                <ul>
                    <li>
                        <img :src="require(`../assets/buy${img}`)" alt="text">
                        <p class="text-style">{{}}</p>
                    </li>
                </ul>
            </div>
        </div>
  </main>
@endsection