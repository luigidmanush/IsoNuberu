<?php

use Illuminate\Database\Seeder;

class tbl_registrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tbl_registros = [
            [ 'Unidad_id' => '1', 'name' => 'FR-01-01', 'nombre' => 'Listado de Documentos','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '2', 'name' => 'FR-02-01', 'nombre' => 'Tabla de planeación','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '2', 'name' => 'FR-02-02', 'nombre' => 'Evaluación de la satisfacción del cliente','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '2', 'name' => 'FR-02-03', 'nombre' => 'Informe del sistema','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '2', 'name' => 'FR-02-04', 'nombre' => 'Minuta de revisión del sistema','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '2', 'name' => 'FR-02-05', 'nombre' => 'Calendario anual','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '3', 'name' => 'FR-03-01', 'nombre' => 'Minuta','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '3', 'name' => 'FR-03-02', 'nombre' => 'Acuerdo','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '4', 'name' => 'FR-04-01', 'nombre' => 'Descripción de Puesto','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '4', 'name' => 'FR-04-03', 'nombre' => 'Expediente','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '4', 'name' => 'FR-04-04', 'nombre' => 'Evaluación de Desempeño','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '4', 'name' => 'FR-04-05', 'nombre' => 'Programa de Capacitación','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '4', 'name' => 'FR-04-06', 'nombre' => 'Evaluación de la Capacitación','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '4', 'name' => 'IT-04-01', 'nombre' => 'Instrucciones de Trabajo - Inducción a la Empresa','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '4', 'name' => 'IT-04-02', 'nombre' => 'Implementación 5S','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '5', 'name' => 'FR-05-01', 'nombre' => 'Programa de Mantenimiento','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '5', 'name' => 'FR-05-02', 'nombre' => 'Bitácora de Mantenimiento','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '5', 'name' => 'FR-05-03', 'nombre' => 'Reporte de Mantenimiento Correctivo','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '5', 'name' => 'FR-05-09', 'nombre' => 'Información del Equipo','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '6', 'name' => 'FR-06-03', 'nombre' => 'Cotización','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '6', 'name' => 'FR-06-07', 'nombre' => 'Planeación de entregas - Producto Terminado','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '6', 'name' => 'IT-06-01', 'nombre' => 'Gestión de ventas en Open ERP','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '7', 'name' => 'FR-07-01', 'nombre' => 'Requisición / Presupuesto de compra','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '7', 'name' => 'FR-07-02', 'nombre' => 'Selección de proveedores','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '7', 'name' => 'FR-07-03', 'nombre' => 'Catálogo de proveedores','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '7', 'name' => 'FR-07-04', 'nombre' => 'Orden de compra / Purchse Order','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '7', 'name' => 'FR-07-05', 'nombre' => 'Seguimiento a Orden de compra','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '8', 'name' => 'FR-08-01', 'nombre' => 'Planeación de Materiales','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '8', 'name' => 'FR-08-02', 'nombre' => 'Dibujo','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '8', 'name' => 'FR-08-03', 'nombre' => 'Ruta de Manufactura','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '8', 'name' => 'FR-08-04', 'nombre' => 'Plan de Control','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '8', 'name' => 'FR-08-05', 'nombre' => 'APQP','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '8', 'name' => 'FR-08-06', 'nombre' => 'Análisis de modo y efecto de las fallas  de proceso (PFMEA)','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '8', 'name' => 'IT-08-10', 'nombre' => 'Instrucciones de Trabajo - Operación','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '9', 'name' => 'FR-09-01', 'nombre' => 'Reporte Diario de Trabajo','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '9', 'name' => 'FR-09-02', 'nombre' => 'Reporte de Productividad','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '9', 'name' => 'FR-09-03', 'nombre' => 'Listado de Programas','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '9', 'name' => 'FR-09-04', 'nombre' => 'Seguimiento de OTs','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '9', 'name' => 'FR-09-05', 'nombre' => 'Lista de prioridades','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '9', 'name' => 'FR-09-06', 'nombre' => 'Listado de dispositivos','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '9', 'name' => 'FR-09-07', 'nombre' => 'Plan de herramientas','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '9', 'name' => 'IT-09',    'nombre' => 'Gestión de la prodcución en Open ERP','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '10', 'name' => 'FR-10-01', 'nombre' => 'Inspección de Operador','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '10', 'name' => 'FR-10-02', 'nombre' => 'Inspección de Calidad','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '10', 'name' => 'FR-10-03', 'nombre' => 'Reporte de producto no conforme','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '10', 'name' => 'FR-10-04', 'nombre' => 'Etiqueta de producto conforme','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '10', 'name' => 'FR-10-05', 'nombre' => 'Etiqueta de producto NO conforme','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '10', 'name' => 'FR-10-07', 'nombre' => 'Lista de control de equipos de medición','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '10', 'name' => 'FR-10-08', 'nombre' => 'Registro de verificación','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '10', 'name' => 'FR-10-09', 'nombre' => 'CEP - gráfica de control X','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '10', 'name' => 'FR-10-10', 'nombre' => 'Certificado de Calidad','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '10', 'name' => 'FR-10-11', 'nombre' => 'Cronograma de actividades','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '10', 'name' => 'FR-10-12', 'nombre' => 'Control de producto NO conforme','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '10', 'name' => 'FR-10-13', 'nombre' => '8Ds','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '11', 'name' => 'FR-11-03', 'nombre' => 'Factura','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '11', 'name' => 'FR-11-04', 'nombre' => 'Etiqueta de identificación de producto','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '11', 'name' => 'FR-11-05', 'nombre' => 'Revisión de Inventario','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '11', 'name' => 'FR-11-06', 'nombre' => 'Lista de Embarque','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '11', 'name' => 'FR-11-07', 'nombre' => 'Vale de consumibles','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '11', 'name' => 'FR-11-08', 'nombre' => 'Packing List','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '11', 'name' => 'FR-11-09', 'nombre' => 'Vale de Entrada / Salida de Almacèn','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '11', 'name' => 'FR-11-10', 'nombre' => 'Control de corte de material','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '11', 'name' => 'FR-11-12', 'nombre' => 'Etiqueta de Identificación de Sustancias','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '11', 'name' => 'FR-11-13', 'nombre' => 'Ajuste de Inventarios','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '11', 'name' => 'IT-11',    'nombre' => 'Gestión del Almacén en Open ERP','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '12', 'name' => 'FR-12-01', 'nombre' => 'Programa de Auditorías','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '12', 'name' => 'FR-12-02', 'nombre' => 'Plan de Auditoría','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '12', 'name' => 'FR-12-03', 'nombre' => 'CheckList de Auditoría','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '12', 'name' => 'FR-12-04', 'nombre' => 'Informe de Auditoría','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '13', 'name' => 'FR-13-01', 'nombre' => 'Análisis de modo de fallas y efectos','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '14', 'name' => 'FR-14-01', 'nombre' => 'Acciones de Mejora','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '15', 'name' => 'FR-15-01', 'nombre' => 'Plan de proyecto','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '15', 'name' => 'FR-15-02', 'nombre' => 'Presupuesto de proyecto','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '15', 'name' => 'FR-15-03', 'nombre' => 'Cronograma de proyecto','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '15', 'name' => 'FR-15-04', 'nombre' => 'Ficha de estado de proyecto','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '15', 'name' => 'FR-15-05', 'nombre' => 'Presentación de Kick-off','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '15', 'name' => 'FR-15-07', 'nombre' => 'Control de cambios del proyecto','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '15', 'name' => 'FR-15-09', 'nombre' => 'Matríaz de Entregables','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '15', 'name' => 'FR-15-10', 'nombre' => 'Acta de Cierre','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '16', 'name' => 'FR-16-01', 'nombre' => 'Plan del ciclo de vida y configuración del producto','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '16', 'name' => 'FR-16-02', 'nombre' => 'Identificación de la configuración','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '16', 'name' => 'FR-16-03', 'nombre' => 'Solicitud de cambios','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '16', 'name' => 'FR-16-04', 'nombre' => 'Implementaci´n de cambios','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            [ 'Unidad_id' => '16', 'name' => 'FR-16-05', 'nombre' => 'Auditoría a la gestión de la configuración','Edicion'=>'', 'ruta' => '/assets/DocsIso/registros/'],
            
            
        ];

        foreach($tbl_registros as $tbl_registro) {
            DB::table('tbl_registros')->insert($tbl_registro);
        }
   
    }
}
