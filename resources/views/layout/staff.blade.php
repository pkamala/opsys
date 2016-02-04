@extends('layout.master')
@section('content')

<div class="container">
<h2>PAA Staff</h2>
<ul class="nav nav-tabs">
<li><a data-toggle="tab" href="#Add">Add PAA Staff Info</a></li>
<li><a data-toggle="tab" href="#Edit">Edit PAA Staff Info</a></li>
<li><a data-toggle="tab" href="#Preview">View PAA Staff Info</a></li>
</ul>
</div>
<div class="tab-content">
<div id="Add" class="tab-pane" fade in active>
{!! Form::open(array('url' => 'postStoreStaff', 'class' => 'form'))!!}

<div class="hide">
        {!! Form::text('Action','Targeting', array('disabled','hidden', 'class' => 'form-control')) !!}
      </div>

<div class="form-group">
<br>
{!! Form::label('Full Name') !!} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
{!! Form::text('Name','',array('required','placeholder'=>'Enter Full Name')) !!}
</div>
<div class="form-group">
<br>
{!! Form::label('Cell Phone') !!} &nbsp;&nbsp;&nbsp;&nbsp;
{!! Form::text('Phone','',array('required','placeholder'=>'Enter Phone Number')) !!}
</div>
<div class="form-group">
<br>
{!! Form::label('Email Address') !!}
{!! Form::text('email','',array('required','placeholder'=>'Enter Email Address')) !!}
</div>
<div class="form-group">
<br>
{!! Form::label('Address') !!} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
{!! Form::text('address','',array('required','placeholder'=>'Enter Address')) !!}
</div></div>
<div class="tab-content" id="Edit" fade in active>
</div></div></div>

@endsection