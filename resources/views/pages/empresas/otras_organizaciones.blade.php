@extends('app')

@section('content')
    <section class="content">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <img src="/img/empresa.png" alt="Trafico">
                    <h3>OTRAS ORGANIZACIONES</h3><br/>
                        <p class="TextoInterno">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p><br/>
              
                         <div>
            <div class="container TopSpace2">
              <div class="row">
                          <div class="row">
                          <div class="col-md-6 TopSpace VerticalLine">
                          <p class="TextoInterno ">
                          <b>FUNDACIONES</b><br/><br/><hr>
                          </p>
                          </div>
                          
                          
                          <div class="col-md-6 TopSpace">
                          <p class="TextoInterno">
                          <b>CLUB DEPORTIVO</b><br/><br/><hr>
                         </p>
                          </div>
            </div>
                    
                    <div class="row">
                          <div class="row">
                          <div class="col-md-6 TopSpace VerticalLine">
                          <p class="TextoInterno ">
                          <b>SOCIEDADES CIVILES</b><br/><br/>
                          </p>
                          </div>
                          
                          
                          <div class="col-md-6 TopSpace">
                          <p class="TextoInterno">
                          <b>COMUNIDADES DE BIENES</b><br/><br/>
                         </p>
                          </div>
            </div>
                   
              </div>
              
              
              <div class="col-lg-12">
              
                        
                        <a href="{{ url('/') }}#show-contact-form"><p class="TopSpace2 center"><img src="/img/btn-presupuesto.jpg" alt="presupuesto"></p></a>
                        
                    </div>
                </div>
            </div>
        </header> 
    </section>
@stop