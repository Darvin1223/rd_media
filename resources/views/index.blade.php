@extends('layout')

@section('content')

{{-- Principal News --}}

  <section class="principal_news_container">
    <div class="principal_news">
      <h1 class="principal_news__title">Melanie Perkins, CEO de Canva: "Con la inteligencia artificial entramos en otra era"</h1>
      <p class="principal_news__text">La líder de la plataforma de diseño gráfico 'todo en uno' más popular del mundo es de las únicas mujeres a frente de una empresa de tecnologia multimillonaria.</p>
    </div>
    <div class="principal_news__info">
      <div class="principal_news__info--elements">
        <span class="material-symbols-outlined principal_news__info--elements-icon">
          visibility
          </span>
          {{-- <p class="principal_news__info--elements-info">13</p> --}}
      </div>
      <div class="principal_news__info--elements">
        <span class="material-symbols-outlined">
          chat_bubble
          </span>
          {{-- <p class="principal_news__info--elements-info">34</p> --}}
      </div>
      <div class="principal_news__info--elements">
        <span class="material-symbols-outlined principal_news__info--elements-icon">
          favorite
        </span>
        {{-- <p class="principal_news__info--elements-info">+99</p> --}}
      </div>
     
      {{-- <p class="principal_news__info--elements-info">Ingrid López</p> --}}
      
      <div class="principal_news__info--elements">
        <span class="material-symbols-outlined">
          share
          </span>
      {{-- <p class="principal_news__info--elements-info">Ingrid López</p> --}}
      </div>
    </div>
    <div class="principal_news_img">
      <picture class="principal_news_img-img">
        <source media="(min-width:1200px )" srcset="{{asset('img/Destop-100.jpg')}}">
          <source media="(min-width:500px )" srcset="{{asset('img/Tablet-100.jpg')}}">
        <img src="{{asset('img/principal_news1.png')}}" class="principal_news_img-img--img" alt="Principal news image">
      </picture>
      <div class="principal_news_img--elements">
        <span class="material-symbols-outlined principal_news__info--elements-icon">
          person
      </span>
       <p class="principal_news_img--elements-info">Ingrid López</p>
    </div>
  </section>
  <section class=" news_week">
    <h2 class="news_week--title">Interes de la semana</h2>
    <div class="news_week--container">
      <a href="#" class="news_week--news--link">
        <div class="news_week--news">
          <img class="news_week--news--img" src="{{asset('img/noticia1.png')}}" alt="">
          <h3 class="news_week--news--sub-title">EU: Administración Joe Biden designa dominicana.</h3>
        </div>
      </a>
      <a href="#" class="news_week--news--link">
        <div class="news_week--news">
          <img class="news_week--news--img" src="{{asset('img/noticia2.png')}}" alt="">
          <h3 class="news_week--news--sub-title">Centro Cultural Banreservas aclara la historia del rock en RD.</h3>
        </div>
      </a>
      <a href="#" class="news_week--news--link">
        <div class="news_week--news">
          <img class="news_week--news--img" src="{{asset('img/noticia3.png')}}" alt="">
          <h3 class="news_week--news--sub-title">El dominicano Ketel Marte conectó jonron contra Arizona.</h3>
        </div>
      </a>
      <a href="#" class="news_week--news--link">
        <div class="news_week--news">
          <img class="news_week--news--img" src="{{asset('img/noticia4.png')}}" alt="">
          <h3 class="news_week--news--sub-title">Presidente Abinader viajará a La Romana este fin de semana.</h3>
        </div>
      </a>
  
    
    
    
    </div>
  </section>
@endsection