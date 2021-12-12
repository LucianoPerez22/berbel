<?php


namespace App\Controller;

use App\Entity\Areas;
use App\Form\Filter\AreaFilterType;
use App\Form\Handler\SaveCommonFormHandler;
use App\Form\Type\SaveAreaType;
use App\Zennovia\Common\BaseController;
use App\Zennovia\Common\EntityManagerHelper;
use App\Zennovia\Common\FindEntitiesHelper;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;

class AreaController extends BaseController
{
    /**
     * @Route(path="/admin/area/list", name="areas_list")
     * @Security("user.hasRole(['ROLE_AREAS_LIST'])")
     * @param FindEntitiesHelper $helper
     * @return Response
     */
    public function listAction(FindEntitiesHelper $helper)
    {
        $form = $this->createForm(AreaFilterType::class, null, ['csrf_protection' => false]);
        $repo = $this->getDoctrine()->getRepository(Areas::class);

        $dataResult = $helper->getDataResultFiltered($repo, $form);
        $dataResult['form'] = $form->createView();

        return $this->render('area/list.html.twig', $dataResult);
    }

    /**
     * @Route(path="/admin/area/new", name="area_new")
     * @Security("user.hasRole(['ROLE_AREA_NEW'])")
     * @param Request $request
     * @param SaveCommonFormHandler $handler
     * @return RedirectResponse|Response
     */
    public function newAction(Request $request, SaveCommonFormHandler $handler){
        $area = new Areas();       

        $handler->setClassFormType(SaveAreaType::class);
        $handler->createForm($area);
        
        if($handler->isSubmittedAndIsValidForm($request)){                
            try {                                                           
                if ($handler->processForm()) {
                    $this->addFlashSuccess('flash.areas.new.success');
    
                    return $this->redirectToRoute('areas_list');
                }               
                
            }catch (\Exception $e) {
                $this->addFlashError('flash.areas.new.error');
                $this->addFlashError($e->getMessage());
            }                           
        }

        return $this->render('area/new.html.twig', array('form' => $handler->getForm()->createView()));
    }

     /**
     * @Route(path="/admin/area/{id}/edit", name="area_edit")
     * @Security("user.hasRole(['ROLE_AREA_EDIT'])")
     * @param Areas $entity
     * @param Request $request
     * @param SaveCommonFormHandler $handler
     * @return RedirectResponse|Response
     */
    public function editAction(Areas $entity, Request $request, SaveCommonFormHandler $handler)
    {        
        $params = [];
        $route = 'areas_list';

        $handler->setClassFormType(SaveAreaType::class);
        $handler->createForm($entity);

        if ($handler->isSubmittedAndIsValidForm($request)) {
            try {
                if ($handler->processTransactionForm()) {
                    $this->addFlashSuccess('flash.areas.edit.success', '' , 'flashes');                                         

                    return $this->redirectToRoute($route, $params);
                }
            } catch (\Exception $e) {
                $this->addFlashError('flash.areas.edit.error');
                $this->addFlashError($e->getMessage());
            }
        }

        return $this->render('area/edit.html.twig', ['form' => $handler->getForm()->createView(), 'entity' => $entity]);
    }

     /**
     * @Route(path="/admin/area/{id}/view", name="area_view")
     * @Security("user.hasRole(['ROLE_AREA_VIEW'])")
     * @param Areas $area
     * @return Response
     */
    public function viewAction(Areas $area)
    {
        return $this->render('area/view.html.twig', ['area' => $area]);
    }

    /**   
     * @Route(path="/admin/area/{id}/delete", name="area_delete")
     * @Security("user.hasRole(['ROLE_AREA_DELETE'])")
     * @param Areas $entity
     * @param EntityManagerHelper $helper
     * @return RedirectResponse
     * @throws \Exception
     */
    public function deleteAction(Areas $entity, EntityManagerHelper $helper)
    {
        try {
            $helper->doDelete($entity);
            $this->addFlashSuccess('flash.areas.delete.success');
        } catch (ForeignKeyConstraintViolationException $e) {
            $this->addFlashError('flash.areas.delete.error');
        }

        return $this->redirectToRoute('areas_list');
    }
   
}
