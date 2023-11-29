@forelse ($errors->all() as $val)
<div class="error-msg">{{$val}}</div>
@empty
@endforelse