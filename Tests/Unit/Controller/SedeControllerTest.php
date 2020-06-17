<?php
namespace UNAL\SedesUnal\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Camilo N <jcneivaa@unal.edu.co>
 */
class SedeControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \UNAL\SedesUnal\Controller\SedeController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\UNAL\SedesUnal\Controller\SedeController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllSedesFromRepositoryAndAssignsThemToView()
    {

        $allSedes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $sedeRepository = $this->getMockBuilder(\UNAL\SedesUnal\Domain\Repository\SedeRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $sedeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSedes));
        $this->inject($this->subject, 'sedeRepository', $sedeRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('sedes', $allSedes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSedeToView()
    {
        $sede = new \UNAL\SedesUnal\Domain\Model\Sede();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('sede', $sede);

        $this->subject->showAction($sede);
    }
}
