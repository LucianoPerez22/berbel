<?php


namespace App\Controller;

use App\Entity\Empleados;
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

class EmpleadoController extends BaseController
{
    /**
     * @Route(path="/admin/empleados/list", name="empleados_list")
     * @Security("user.hasRole(['ROLE_USER'])")
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
     * @Route(path="/admin/empleado/hour", name="empleado_hour")
     * @Security("user.hasRole(['ROLE_EMPLEADOS_HOUR'])")
     * @param Request $request
     * @param SaveCommonFormHandler $handler
     * @return RedirectResponse|Response
     */
    public function hourAction(Request $request, SaveCommonFormHandler $handler){
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

        return $this->render('empleado/hour.html.twig', array('form' => $handler->getForm()->createView()));

        // // $em is your Doctrine\ORM\EntityManager instance
        // $schemaManager = $em->getConnection()->getSchemaManager();
        // // array of Doctrine\DBAL\Schema\Column
        // $columns = $schemaManager->listTableColumns($tableName);

        // $columnNames = [];
        // foreach($columns as $column){
        //     $columnNames[] = $column->getName();
        // }
    }
}
