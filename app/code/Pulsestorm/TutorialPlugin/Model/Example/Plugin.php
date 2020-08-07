<?php
namespace Pulsestorm\TutorialPlugin\Model\Example;
class Plugin
{

    public function beforeGetMessage($subject, $thing='World', $should_lc=false)
    {
        echo "Calling " . __METHOD__,"\n";
    }
    public function afterGetMessage($subject, $result)
    {
        echo "Calling " , __METHOD__,"\n";
        return $result;
    }
}