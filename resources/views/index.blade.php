@extends('app')

@section('content')

<div class="top-section">
  <div class="hero-banner"></div>
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="search-container">
          <h3>Find natural relief for your pain</h3>
          <p>What kind of pain are you experiencing?</p>
          <form action="/search" method="POST" id="search-form">
            <input type="text" id="search-box" placeholder="Back pain, Headaches, etc..." name="search-box" />
            <input type="submit" class="pull-right btn btn-success" value="Find Relief" name="submit" id="submit" />
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
