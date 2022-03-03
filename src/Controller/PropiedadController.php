<?php


namespace App\Controller;

use App\Entity\Areas;
use App\Entity\Propiedades;
use App\Form\Filter\PropiedadesFilterType;
use App\Form\Handler\SaveCommonFormHandler;
use App\Form\Type\SavePropiedadType;
use App\Zennovia\Common\BaseController;
use App\Zennovia\Common\EntityManagerHelper;
use App\Zennovia\Common\FindEntitiesHelper;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;

class PropiedadController extends BaseController
{
    /**
     * @Route(path="/admin/propiedad/{id}/list/", name="propiedad_list")
     * @Security("user.hasRole(['ROLE_PROPIEDADES_LIST'])")
     * @param Areas $area
     * @param FindEntitiesHelper $helper
     * @return Response
     */
    public function listAction(FindEntitiesHelper $helper, Areas $area)
    {
        $form = $this->createForm(PropiedadesFilterType::class, null, ['csrf_protection' => false]);
        $repo = $this->getDoctrine()->getRepository(Propiedades::class);

        $dataResult = $helper ->setExtraFilters(['area' => $area->getId()])
                              ->getDataResultFiltered($repo, $form);
        $dataResult['form'] = $form->createView();

        return $this->render('propiedad/list.html.twig', $dataResult);
    }

    /**
     * @Route(path="/admin/propiedad/{id}/view", name="propiedad_view")
     * @Security("user.hasRole(['ROLE_PROPIEDADES_VIEW'])")
     * @param Propiedades $propiedad
     * @return Response
     */
    public function viewAction(Propiedades $propiedad)
    {
        return $this->render('propiedad/view.html.twig', ['propiedad' => $propiedad]);
    }

    /**
     * @Route(path="/admin/propiedad/{id}/new", name="propiedad_new")
     * @Security("user.hasRole(['ROLE_PROPIEDADES_NEW'])")
     * @param Areas $area
     * @param Request $request
     * @param SaveCommonFormHandler $handler
     * @return RedirectResponse|Response
     */
    public function newAction(Request $request, SaveCommonFormHandler $handler, Areas $area){
        $propiedad = new Propiedades();       

        $propiedad->setArea($area);

        $handler->setClassFormType(SavePropiedadType::class);
        $handler->createForm($propiedad);
        
        if($handler->isSubmittedAndIsValidForm($request)){                
            try {                                                           
                if ($handler->processForm()) {
                    $this->addFlashSuccess('flash.propiedades.new.success');
    
                    return $this->redirectToRoute('propiedad_list', array('id' => $area->getId()));
                }               
                
            }catch (\Exception $e) {
                $this->addFlashError('flash.propiedades.new.error');
                $this->addFlashError($e->getMessage());
            }                           
        }

        return $this->render('propiedad/new.html.twig', array(
                'form'      => $handler->getForm()->createView(),
                'area'      => $area
            ));
    }

    /**
     * @Route(path="/admin/propiedad/{id}/edit", name="propiedad_edit")
     * @Security("user.hasRole(['ROLE_PROPIEDADES_EDIT'])")
     * @param Propiedades $entity
     * @param Request $request
     * @param SaveCommonFormHandler $handler
     * @return RedirectResponse|Response
     */
    public function editAction(Propiedades $entity, Request $request, SaveCommonFormHandler $handler)
    {        
        $params = array('id' => $entity->getArea()->getId());
        $route = 'propiedad_list';

        $handler->setClassFormType(SavePropiedadType::class);
        $handler->createForm($entity);

        if ($handler->isSubmittedAndIsValidForm($request)) {
            try {
                if ($handler->processTransactionForm()) {
                    $this->addFlashSuccess('flash.propiedades.edit.success', '' , 'flashes');                                         

                    return $this->redirectToRoute($route, $params);
                }
            } catch (\Exception $e) {
                $this->addFlashError('flash.propiedades.edit.error');
                $this->addFlashError($e->getMessage());
            }
        }

        return $this->render('propiedad/edit.html.twig', ['form' => $handler->getForm()->createView(), 'entity' => $entity]);
    }

   /**     
     * @Route(path="/admin/propiedad/{id}/delete", name="propiedad_delete")
     * @Security("user.hasRole(['ROLE_PROPIEDADES_DELETE'])")
     * @param Propiedades $entity
     * @param EntityManagerHelper $helper
     * @return RedirectResponse
     * @throws \Exception
     */
    public function deleteAction(Propiedades $entity, EntityManagerHelper $helper)
    {
        try {
            $helper->doDelete($entity);
            $this->addFlashSuccess('flash.group.delete.success');
        } catch (ForeignKeyConstraintViolationException $e) {
            $this->addFlashError('flash.group.delete.error');
        }

        return $this->redirectToRoute('propiedad_list', array('id' => $entity->getArea()->getId()));
    }       
}
