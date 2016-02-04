@extends('layout.master')
@section('content')

<div class="container">
<h2>Targeting</h2>
<ul class="nav nav-tabs">
<li><a data-toggle="tab" href="#Add">Add Targeting Info</a></li>
<li><a data-toggle="tab" href="#Edit">Edit Targeting Info</a></li>
<li><a data-toggle="tab" href="#Preview">View Targeting Info</a></li>
</ul>
</div>
<div class="tab-content">
<div id="Add" class="tab-pane" fade in active>
{!! Form::open(array('url' => 'postStoreTargeting', 'class' => 'form'))!!}

<div class="hide">
        {!! Form::text('Action','Targeting', array('disabled','hidden', 'class' => 'form-control')) !!}
      </div>

<div class="form-group">
<br>
{!! Form::label('Round') !!} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
{!! Form::select('round',array('Round 1' => 'Round 1', 'Round 2' => 'Round 2', 'Round 3' => 'Round 3', 'Round 4' => 'Round 4'),
array('required','class' => 'form-control')) !!}
</div>
<div class="form-group"><br>
      {!! Form::label('Village') !!} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      {!! Form::select('Village',['Mmwidu','Kijiji','Maendeleo']) !!}
      </div>
      <div class="form-group"><br>
      {!! Form::label('Personnel') !!} &nbsp;
      {!! Form::select('Personnel',['Peter','Kamala','Maendeleo']) !!}
      </div>
       <div class="form-group"><br>
            {!! Form::label('Start Date') !!} &nbsp;&nbsp;
            {!! Form::date('Start Date',\Carbon\Carbon::now()) !!}
            </div>
            <div class="form-group"><br>
                        {!! Form::label('End Date') !!} &nbsp;&nbsp;&nbsp;
                        {!! Form::date('End Date',\Carbon\Carbon::now()) !!}
                        </div>
    <div class="form-group"><br>
                            {!! Form::label('Complete','Complete Questionnaires') !!} &nbsp;
                            {!! Form::number('Complete') !!}
                            </div>
                            <div class="form-group"><br>
                                                        {!! Form::label('Incomplete','Incomplete Questionnaires') !!} &nbsp;
                                                        {!! Form::number('Incomplete') !!}
                                                        </div>
   <div class="form-group">
   {!! Form::textarea('Reasons','',array('placeholder'=>'Enter Reasons for Incomplete Questionnaires','height'=>20)) !!}
                                                           </div>
                                                           </div>
                                                           <div class="tab-content" id="Edit" fade in active>

                                                           </div></div>

@endsection