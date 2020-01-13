@extends('layout')
@section('mainContent')
{!! csrf_field() !!}
@if(count($hotelLists) > 0)
@foreach ($hotelLists as $hotelList)

<div class="row span12">        
    <div class="col-md-3 col-xs-3">
    <img src="/images/{{  $hotelList->hotel_image}}" width="270" height="150" class="img-fluid">
    </div>
    <div class="col-md-7 col-xs-7">
        <div>
            <div class="left-align"><h5 class="title">{{ $hotelList->hotel_name }} </h5></div>
            <div class="left-align">
                | <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
        <p class="address"><small class="text-muted">{{ $hotelList->hotel_address }}</small></p>
      <br/>
      
      <button type="button" class="btn btn-warning text-white rooms-availability" data-toggle="collapse" data-target="#collapseHotels{{ $hotelList->id }}" aria-expanded="false" data-id={{ $hotelList->id }}><i class="fa fa-caret-down"></i>&nbsp;Rooms/Availability</button>
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <table class="table collapse" id="collapseHotels{{ $hotelList->id }}" >
      <tbody class="trew{{ $hotelList->id }}">
         
        </tbody>
      </table>         
    </div><!--End of col -->
    <div class="col-md-2 col-xs-2">
    <!--<span class="price-feature">{{ $hotelList->base_price }}</span>--><img src="/images/arrow.png" width="200" height="100">
    </div>
</div>
@endforeach
@endif
@endsection
