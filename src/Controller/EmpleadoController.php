<?php
namespace App\Controller;

use App\Entity\Areas;
use App\Entity\Empleados;
use App\Entity\ParteDiario;
use App\Form\Filter\EmpleadosFilterType;
use App\Form\Handler\SaveCommonFormHandler;
use App\Zennovia\Common\BaseController;
use App\Zennovia\Common\EntityManagerHelper;
use App\Zennovia\Common\FindEntitiesHelper;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use App\Form\Type\SaveEmpleadoType;
use App\Form\Type\SaveHourType;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;

class EmpleadoController extends BaseController
{   
    /**
     * @Route(path="/admin/empleados/list", name="empleados_list")
     * @Security("user.hasRole(['ROLE_EMPLEADOS_LIST'])")
     * @param FindEntitiesHelper $helper
     * @return Response
     */
    public function listAction(FindEntitiesHelper $helper)
    {
        $form = $this->createForm(EmpleadosFilterType::class, null, ['csrf_protection' => false]);
        $repo = $this->getDoctrine()->getRepository(Empleados::class);

        $dataResult = $helper->getDataResultFiltered($repo, $form);
        $dataResult['form'] = $form->createView();

        return $this->render('empleado/list.html.twig', $dataResult);
    }

    /**
     * @Route(path="/admin/empleado/{id}/view", name="empleado_view")
     * @Security("user.hasRole(['ROLE_EMPLEADOS_VIEW'])")
     * @param Empleados $empleados
     * @return Response
     */
    public function viewAction(Empleados $empleado)
    {
        return $this->render('empleado/view.html.twig', ['empleado' => $empleado]);
    }


    /**
     * @Route(path="/admin/empleado/new", name="empleado_new")
     * @Security("user.hasRole(['ROLE_EMPLEADOS_NEW'])")
     * @param Request $request
     * @param SaveCommonFormHandler $handler
     * @return RedirectResponse|Response
     */
    public function newAction(Request $request, SaveCommonFormHandler $handler){
        $empleado = new Empleados();       

        $handler->setClassFormType(SaveEmpleadoType::class);
        $handler->createForm($empleado);
        
        if($handler->isSubmittedAndIsValidForm($request)){                
            try {                                                           
                if ($handler->processForm()) {
                    $this->addFlashSuccess('flash.fieldtype.new.success');
    
                    return $this->redirectToRoute('empleados_list');
                }               
                
            }catch (\Exception $e) {
                $this->addFlashError('flash.fieldtype.new.error');
                $this->addFlashError($e->getMessage());
            }                           
        }

        return $this->render('empleado/new.html.twig', array('form' => $handler->getForm()->createView()));
    }

    /**
     * @Route(path="/admin/empleado/{id}/edit", name="empleado_edit")
     * @Security("user.hasRole(['ROLE_EMPLEADOS_EDIT'])")
     * @param Empleados $entity
     * @param Request $request
     * @param SaveCommonFormHandler $handler
     * @return RedirectResponse|Response
     */
    public function editAction(Empleados $entity, Request $request, SaveCommonFormHandler $handler)
    {        
        $params = [];
        $route = 'empleados_list';

        $handler->setClassFormType(SaveEmpleadoType::class);
        $handler->createForm($entity);

        if ($handler->isSubmittedAndIsValidForm($request)) {
            try {
                if ($handler->processTransactionForm()) {
                    $this->addFlashSuccess('flash.empleados.edit.success', '' , 'flashes');                                         

                    return $this->redirectToRoute($route, $params);
                }
            } catch (\Exception $e) {
                $this->addFlashError('flash.user.edit.error');
                $this->addFlashError($e->getMessage());
            }
        }

        return $this->render('empleado/edit.html.twig', ['form' => $handler->getForm()->createView(), 'entity' => $entity]);
    }

   /**
     * Eliminar una entidad Empleados.
     *
     * @Route(path="/admin/empleado/{id}/delete", name="empleado_delete")
     * @Security("user.hasRole(['ROLE_EMPLEADOS_DELETE'])")
     * @param Empleados $entity
     * @param EntityManagerHelper $helper
     * @return RedirectResponse
     * @throws \Exception
     */
    public function deleteAction(Empleados $entity, EntityManagerHelper $helper)
    {
        try {
            $helper->doDelete($entity);
            $this->addFlashSuccess('flash.group.delete.success');
        } catch (ForeignKeyConstraintViolationException $e) {
            $this->addFlashError('flash.group.delete.error');
        }

        return $this->redirectToRoute('empleados_list');
    }     
    
    /**
     * @Route(path="/admin/empleado/{id}/hour", name="empleado_hour")
     * @Security("user.hasRole(['ROLE_EMPLEADOS_HOUR'])")
     * @param Request $request
     * @param SaveCommonFormHandler $handler
     * @return RedirectResponse|Response
     */
    public function hourAction(Request $request, SaveCommonFormHandler $handler, Empleados $empleadoId){
        $empleadoRepository =  $this->getDoctrine()->getRepository(Empleados::class);
        $empleado = $empleadoRepository->findOneBy(['id' => $empleadoId]);             

        $empleadoInfo['info'] = array(
            'id'    => $empleado->getId(),
            'name'  => $empleado->getName()
        );   
        
        $parte = new ParteDiario();

        $parte->setEmpleado($empleado);

        $handler->setClassFormType(SaveHourType::class);
        $handler->createForm($parte, $empleadoInfo);
        
        $data = $request->request->all();
        
        isset($data['save_hourData']) ? $parte->setDatos($data['save_hourData']) : '';
       
        if($handler->isSubmittedAndIsValidForm($request)){  
            try {                                                           
                if ($handler->processForm()) {
                    $this->addFlashSuccess('flash.hour.new.success');
    
                    return $this->redirectToRoute('empleados_list');
                }               
                
            }catch (\Exception $e) {
                $this->addFlashError('flash.hour.new.error');
                $this->addFlashError($e->getMessage());
            }                           
        }

        return $this->render('empleado/hour.html.twig', array('form' => $handler->getForm()->createView()));
    }

    /**
     * @Route(path="/admin/empleado/ajax/{area}", name="ajax_form_area")
     * @Security("user.hasRole(['ROLE_EMPLEADOS_HOUR'])")
     * @param Areas $area
     * @return Response     
     */
    public function ajaxAreaAction(Areas $area = null){        
        $propiedades = $area->getPropiedades();

        $data = array();
        foreach ($propiedades as $key => $value) { 
            array_push($data, array(
                'name'  => $value->getName(),
                'value' => $value->getValue()
            ));
                  
        }
           
        return new Response(json_encode($data));                     
    }

    /**
     * @Route(path="/admin/empleado/{id}/reporte", name="empleado_reports")
     * @Security("user.hasRole(['ROLE_EMPLEADOS_REPORT'])")
     * @param Empleados $empleados
     * @return Response
     */
    public function reportAction(Empleados $empleado)
    {
        //$data = $empleado->getParteDiarios();
        //$partRepository = $this->getDoctrine()->getRepository(ParteDiario::class);
        //$data           = $partRepository->findBy(array('empleado' => $empleado), array('area' => 'ASC'));

        return $this->render('empleado/reportes.html.twig', ['empleado' => $empleado]);
    }

     /**
     * @Route(path="/admin/empleado/ajax/{empleado}/{desde}/{hasta}", name="ajax_form_report")
     * @Security("user.hasRole(['ROLE_EMPLEADOS_HOUR'])")
     * @param Empleados $empleado
     * @return Response     
     */
    public function ajaxReportAction(Empleados $empleado = null,\DateTime $desde = null,\DateTime $hasta = null){           
        $data = $this->getDoctrine()->getRepository(ParteDiario::class)
                                            ->findByFechas($empleado->getId(), $desde->format('Y-m-d'), $hasta->format('Y-m-d'));                                                       
        
                                                     
         $diff = $desde->diff($hasta);
         $i = 0;        
         $control = count($data);
         $fechaDesde =  $desde->format('Y-m-d');                     
        
        for ($i=0; $i <= intval($diff->days) ; $i++) {                  
            for ($i1=0; $i1 < intval($control) ; $i1++) {        
                $fechaData = date('Y-m-d', strtotime($data[$i1]['fecha']));  
                $fechaRef = date('Y-m-d', strtotime($fechaDesde . ' +' . $i . ' day'));                                                                         
                
                if ($fechaRef <> $fechaData){                                                     
                        $result = array_search($fechaRef, array_column($data,'fecha'));      
                        
                        if ($result === false ){
                            array_unshift($data, ['fecha' => $fechaRef, 'numero' => 0, 'datos' => []]);
                        }
                }
            }   
                                                                                        
        }
        
        usort($data, function($a, $b) {
            return $a['fecha'] <=> $b['fecha'];
        });
      
        $headers = [];
        foreach ($data as $key => $value) {
            $contador = count($value['datos']);
            if ($contador != 0){
                foreach ($value['datos'] as $keyV => $valueV) {                    
                    $headers[$keyV] = $valueV;
                }                
            }
        }     
               
        return $this->render('empleado/reporteData.html.twig', [
                'data'      => $data, 
                'headers'   => $headers,
                'empleado'  => $empleado,
                'desde'     => $desde->format('Y-m-d'),
                'hasta'     => $hasta->format('Y-m-d')
            ]);                 
    }

    /**
     * @Route("/export/{empleado}/{desde}/{hasta}",  name="export")     
     */
    public function export(Empleados $empleado = null,\DateTime $desde = null,\DateTime $hasta = null)
    {      
        $data = $this->getDoctrine()->getRepository(ParteDiario::class)
                    ->findByFechas($empleado->getId(), $desde->format('Y-m-d'), $hasta->format('Y-m-d'));                                                       

                 
        $diff = $desde->diff($hasta);
        $i = 0;        
        $control = count($data);
        $fechaDesde =  $desde->format('Y-m-d');                     

        for ($i=0; $i <= intval($diff->days) ; $i++) {                  
            for ($i1=0; $i1 < intval($control) ; $i1++) {        
                $fechaData = date('Y-m-d', strtotime($data[$i1]['fecha']));  
                $fechaRef = date('Y-m-d', strtotime($fechaDesde . ' +' . $i . ' day'));                                                                         

                if ($fechaRef <> $fechaData){                                                     
                    $result = array_search($fechaRef, array_column($data,'fecha'));      

                        if ($result === false ){
                        array_unshift($data, ['fecha' => $fechaRef, 'numero' => 0, 'datos' => []]);
                        }
                }
            }   
                                                            
        }

        usort($data, function($a, $b) {
        return $a['fecha'] <=> $b['fecha'];
        });

        $headers = [];
        foreach ($data as $key => $value) {
            $contador = count($value['datos']);
            if ($contador != 0){
                foreach ($value['datos'] as $keyV => $valueV) {                    
                $headers[$keyV] = $valueV;
                }                
            }
        }     
        
        $spreadsheet = new Spreadsheet();

        $package = new Package(new EmptyVersionStrategy());
        $imgLogo = './build/images/logoBerbel.jpg';

        $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('Logo');
        $drawing->setPath($package->getUrl($imgLogo)); // put your path and image here
        $drawing->setCoordinates('A1');
        $drawing->setHeight(66);       
        $drawing->getShadow()->setVisible(true);        
        $drawing->setWorksheet($spreadsheet->getActiveSheet());

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setTitle('Reporte');

        //Encabezado Nombre Empresa/CUIT/Nombre Empleado/Fecha Ingreso/CUIL Empleado
        //Domicilio Empresa/Categoria Empleado

        $spreadsheet->getActiveSheet()->mergeCells('C1:F2');
        $spreadsheet->getActiveSheet()->getStyle('C1')->getFont()->setBold(true);
        $sheet->getCell('C1')->setValue('Empleador: GRUAS BERBEL SRL');

        $spreadsheet->getActiveSheet()->mergeCells('C3:K3');        
        $sheet->getCell('C3')->setValue('Domicilio: Cañadón Cardozo y Minas S/N - Parque Ind. II -Rincón de los Sauces- Neuquén');

        $spreadsheet->getActiveSheet()->getStyle('C1:F2')
            ->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);

        $spreadsheet->getActiveSheet()->mergeCells('G1:I2');        
        $sheet->getCell('G1')->setValue('CUIT: 30-71476743-3');

        $spreadsheet->getActiveSheet()->getStyle('G1:I2')
            ->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
         
        $sheet->getCell('J1')->setValue('Empleado:');

        $spreadsheet->getActiveSheet()->getStyle('J1')
            ->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
        
        $sheet->getCell('K1')->setValue($empleado->getName());
        $spreadsheet->getActiveSheet()->getStyle('K1')
            ->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);

        $sheet->getCell('J2')->setValue('Fecha Ingreso:');

        $spreadsheet->getActiveSheet()->getStyle('J2')
            ->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);

        $sheet->getCell('K2')->setValue($empleado->getFechaIngreso()); 

        $spreadsheet->getActiveSheet()->getStyle('K2')
            ->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);

        
        $sheet->getCell('L2')->setValue('CUIL: ' . $empleado->getCuil());

        $spreadsheet->getActiveSheet()->getStyle('L2')
            ->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
        
        $spreadsheet->getActiveSheet()->mergeCells('C5:D5');  
        $sheet->getCell('C5')->setValue(' Reporte desde: ');
        $sheet->getCell('E5')->setValue(' ' . $desde->format('d-m-Y'));
        $sheet->getCell('F5')->setValue(' hasta: ');
        $sheet->getCell('G5')->setValue(' ' . $hasta->format('d-m-Y'));

        $spreadsheet->getActiveSheet()->getStyle('C5:G5')
            ->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
                      
         define('CELDA', 'B');
         $valor = 8;
         $sheet->getCell('A' . $valor)->setValue('Fecha');
         $spreadsheet->getActiveSheet()->getStyle('A'. $valor)
         ->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK); 

         $celdaSoporte = CELDA;
         for ($i_Datos=0; $i_Datos <count($headers) ; $i_Datos++) { 
             $sheet->getCell($celdaSoporte . $valor)->setValue($headers[$i_Datos]['clave']); 
             $spreadsheet->getActiveSheet()->getStyle($celdaSoporte . $valor)
                 ->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);  

             $celdaSoporte++;  
         }

         for ($i=0; $i < count($data) ; $i++) {             
            $sheet->getCell('A'. intval($valor+1))->setValue(date('d-m-Y',strtotime($data[$i]['fecha'])));           
                      
            $celdaSoporte = CELDA;
            if (count($data[$i]['datos']) == 0){               
                for ($i_Datos=0; $i_Datos <count($headers) ; $i_Datos++) {                                     
                    $sheet->getCell($celdaSoporte . intval($valor + 1))->setValue('No trabajado');                                          
                    $celdaSoporte++; 
                }  
                $valor = $valor+1;                                                                                    
            }else{
                foreach ($data[$i]['datos'] as $key => $value) {                                                       
                    $sheet->getCell($celdaSoporte . intval($valor + 1))->setValue($value['valor']);    
                     $celdaSoporte++;                      
                }                

                $valor = $valor+1;                            
            }           
         }                   

         foreach (range("B", $celdaSoporte) as $letra) {
            $sumRange = $letra . '9:' . $letra . $valor;
            $sheet->setCellValue($letra . intval($valor+3) , '=SUM('. $sumRange . ')');    
         }      
         
         $sheet->getCell('A' . intval($valor + 3))->setValue('Totales'); 

        $writer = new Xlsx($spreadsheet);        

         header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
         header('Content-Disposition: attachment;filename="reporte.xls"');

         ob_end_clean();
         $writer->save('php://output');
        
        return $this->redirectToRoute('home');
    }
}
