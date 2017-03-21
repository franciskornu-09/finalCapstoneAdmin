@extends('app')

@section('content')
<div id="pop_div"></div>
// With Lava class alias
<?= Lava::render('AreaChart', 'Population', 'pop_div') ?>
@endsection