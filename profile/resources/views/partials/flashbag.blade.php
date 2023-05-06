@if (session()->has('success'))
<x-success type="success" >
    {{session('success')}}
</x-success>
@endif