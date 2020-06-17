<?php
namespace UNAL\SedesUnal\Controller;

/***
 *
 * This file is part of the "Sedes UNAL" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Camilo N <jcneivaa@unal.edu.co>, UNAL
 *
 ***/

/**
 * SedeController
 */
class SedeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * sedeRepository
     *
     * @var \UNAL\SedesUnal\Domain\Repository\SedeRepository
     * @inject
     */
    protected $sedeRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {

        $texto = $this->settings['texto_sedes'];


        $sedes = $this->sedeRepository->findAll();

        $this->view->assignMultiple([
            'sedes' => $sedes,
            'texto' => $texto,
        ]);
    }

    /**
     * action show
     *
     * @param \UNAL\SedesUnal\Domain\Model\Sede $sede
     * @return void
     */
    public function showAction()
    {
        $uid = $this->request->getArgument('sede');
        $sede = $this->sedeRepository->findByUid($uid);
        $this->view->assign('sede', $sede);
    }
}
