@extends('layouts.admin')

@section('content')

@endsection


@section('scripts')

<script>
  var adminMenu = new Vue({
    el: '#admin-menu',
    data: {
      isOpen: false //side-menu
    }
  })
</script>

@endsection
