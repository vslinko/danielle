<?php

namespace Rithis\DanielleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Rithis\DanielleBundle\Form\Type\CompanyDescriptionType;
use Rithis\DanielleBundle\Entity\CompanyDescription\Group;
use Rithis\DanielleBundle\Entity\CompanyDescription\Property;

class CompanyDescriptionController extends Controller
{
    const MEMCACHE_KEY = 'rithis:danielle:company_description';

    public function editAction()
    {
        $formData = $this->get("sm_memcache")->get(self::MEMCACHE_KEY) ?: array();

        $form = $this->createForm(new CompanyDescriptionType(), $formData);

        return $this->render('RithisDanielleBundle:CompanyDescription:edit.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function putAction(Request $request)
    {
        $form = $this->createForm(new CompanyDescriptionType());
        $form->bindRequest($request);

        if ($form->isValid()) {
            $formData = $form->getData();

            $this->get("sm_memcache")->set(self::MEMCACHE_KEY, $formData);

            return $this->redirect($this->generateUrl('rithis_danielle_company_description_edit'));
        }

        return $this->render('RithisDanielleBundle:CompanyDescription:edit.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
