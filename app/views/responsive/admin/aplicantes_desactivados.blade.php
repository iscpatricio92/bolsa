@extends("masters/responsive/admin")
@section("main")
    <h3 class="page-header text-center">
        <span class="label label-danger">{{ $aplicantes_actuales_c }}</span> Aplicantes Desactivados
    </h3>
    @include("partials/responsive/admin/aplicantes_desactivados_table")
@stop