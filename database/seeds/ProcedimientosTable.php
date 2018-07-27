<?php

use Illuminate\Database\Seeder;

class ProcedimientosTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tbl_procedimientos = [
            [ 'name' => 'PC-01', 'nombre' => 'Gestión del conocimiento', 'Edicion' => '10', 'ruta' => '/assets/DocsIso/Procedimientos/PC-01.pdf'],
            [ 'name' => 'PC-02', 'nombre' => 'Planeación, medición y revisión', 'Edicion' => '7', 'ruta' => '/assets/DocsIso/Procedimientos/PC-02.pdf'],
            [ 'name' => 'PC-03', 'nombre' => 'Comunicación', 'Edicion' => '4', 'ruta' => '/assets/DocsIso/Procedimientos/PC-03.pdf'],
            [ 'name' => 'PC-04', 'nombre' => 'Recursos humanos', 'Edicion' => '14', 'ruta' => '/assets/DocsIso/Procedimientos/PC-04.pdf'],
            [ 'name' => 'PC-05', 'nombre' => 'Mantenimiento', 'Edicion' => '11', 'ruta' => '/assets/DocsIso/Procedimientos/PC-05.pdf'],
            [ 'name' => 'PC-06', 'nombre' => 'Ventas', 'Edicion' => '19', 'ruta' => '/assets/DocsIso/Procedimientos/PC-06.pdf'],
            [ 'name' => 'PC-07', 'nombre' => 'Compras', 'Edicion' => '17', 'ruta' => '/assets/DocsIso/Procedimientos/PC-07.pdf'],
            [ 'name' => 'PC-08', 'nombre' => 'Ingenieria', 'Edicion' => '12', 'ruta' => '/assets/DocsIso/Procedimientos/PC-08.pdf'],
            [ 'name' => 'PC-09', 'nombre' => 'Produccion', 'Edicion' => '13', 'ruta' => '/assets/DocsIso/Procedimientos/PC-09.pdf'],
            [ 'name' => 'PC-10', 'nombre' => 'Contol de Calidad', 'Edicion' => '23', 'ruta' => '/assets/DocsIso/Procedimientos/PC-10.pdf'],
            [ 'name' => 'PC-11', 'nombre' => 'Almacenes y Embarques', 'Edicion' => '19', 'ruta' => '/assets/DocsIso/Procedimientos/PC-11.pdf'],
            [ 'name' => 'PC-12', 'nombre' => 'Auditoría interna', 'Edicion' => '11', 'ruta' => '/assets/DocsIso/Procedimientos/PC-12.pdf'],
            [ 'name' => 'PC-13', 'nombre' => 'Gestión de riesgos', 'Edicion' => '1', 'ruta' => '/assets/DocsIso/Procedimientos/PC-13.pdf'],
            [ 'name' => 'PC-14', 'nombre' => 'Mejora continua', 'Edicion' => '13', 'ruta' => '/assets/DocsIso/Procedimientos/PC-14.pdf'],
            [ 'name' => 'PC-15', 'nombre' => ' Administración de proyectos', 'Edicion' => '1', 'ruta' => '/assets/DocsIso/Procedimientos/PC-15.pdf'],
            [ 'name' => 'PC-16', 'nombre' => 'Gestion de la configuracion', 'Edicion' => '1', 'ruta' => '/assets/DocsIso/Procedimientos/PC-16.pdf'],
           
            
            
    ];

    foreach($tbl_procedimientos as $tbl_procedimiento) {
        DB::table('tbl_procedimientos')->insert($tbl_procedimiento);
    }
    }
}
