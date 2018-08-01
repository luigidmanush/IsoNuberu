@extends('layouts.app')

@section('title',Auth::user()->nombre)
@section('Content')
@section('NamePage','Lista de Empleados')




<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Avatar</th>
                                    <th>NoEmpleado</th>
                                    <th>Paterno</th>
                                    <th>Materno</th>
                                    <th>Nombre (s)</th>
                                    <th>Turno</th>
                                    <th>FechaIngreso</th>
                                    <th>Estatus</th>
                                    <th>Perfil</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $Empleados as $Empleado  )
                                <tr>
                                    <td style="width: 10%; text-align: center;">
                                        <div>
                                            <img src="/assets/images/users/avatarMan.png" class="img-circle" width="50%">
                                        </div>
                                    </td>
                                    <td style="width:5%; text-align: center;">{{ $Empleado->NoEmpleado }}</td>
                                    <td style="width:15%;">{{ $Empleado->Ap_Paterno }}</td>
                                    <td style="width:15%;">{{ $Empleado->Ap_Materno }}</td>
                                    <td style="width:20%;">{{ $Empleado->Nombre }}</td>
                                    <td style="width:10%;">Turno</td>
                                    <td style="width:10%;">FechaIngreso</td>
                                    <td style="width:10%;">{{ $Empleado->TurnoText }}</td>
                                    <td style="width:5%;">
                                        <button type="button" class="btn btn-info"><i class="fa fa-eye"></i> Ver</button>
                                    </td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
            
        </div>
    </div>
                 
@endsection

@push('script')    
    <!-- This is data table -->
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
@endpush
