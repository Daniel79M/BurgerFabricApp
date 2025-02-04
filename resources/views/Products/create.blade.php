@extends('Layouts.base')

@section('content')
   
@endsection

@section('js')
    <script src="{{ URL::asset('assets/summernote/summernote.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: "Saisir une lingue description ...",
                height: 150
            });
        });
    </script>
@endsection
