<?php  //[STAMP] 1968eb5f9367d38febbf3374f4e2e4a7
namespace _generated;

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile

use Codeception\Module\MessageHelper;

trait MessageGuyActions
{
    /**
     * @return \Codeception\Scenario
     */
    abstract protected function getScenario();

    
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\MessageHelper::getMessage()
     */
    public function getMessage($name) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getMessage', func_get_args()));
    }
}
