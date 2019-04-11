{{-- /resources/views/welcome.blade.php --}}
@extends('layouts.master')

<!-- Calculator form -->
@section('content')
    <!--display error-->
    @if(count($errors) >0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif

    <form method='GET' action='/calculate'>
        <p>
            <label>Head of the Household :</label>
            <input type='radio' name='gender' value='Female'>Female
            <input type='radio' name='gender' value='Male'>Male
            <input type='radio' name='gender' value='Other'>Other
        </p>
        <p>
            <label>Annual Household Income <b>*</b> :</label>
            <input name='number1'
                   type='number'
                   class='form-control'
                   placeholder='Number Value Only'
                   value='{{$number1}}'
                   required>
        </p>
        <p>
            <label>Addition Household Income <b>*</b> :</label>
            <input name='number2'
                   type='number'
                   class='form-control'
                   placeholder='Number Value Only'
                   value='{{$number2}}'
                   required>
        </p>
        <p>
            <label>National Income Percentage :</label>
            <input type='checkbox' name='percent' {{($percent) ? 'checked' : ''}}>
        </p>
        <p>
            <input name='submit' type='submit' value='Calculate'>
        </p>
    </form>

    @if($total)
        <div class='result'>
        @if ($gender == null)
            <h4>Gender was not selected.</h4>
        @else
            <h4>Head of the household: {{$gender}}</h4>
        @endif

        <h4>Annual household income: {{$total}}</h4>

        @if ($percent == '')
            <h4>Income percentage was not selected.</h4>
        @else
            <h4>{{$percent}}</h4>
        @endif
        </div>
    @endif
@endsection