<?php
namespace Pulsestorm\TutorialObjectManager1\Command;


use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Testbed extends AbstractCommand
{
    protected function configure()
    {
        $this->setName('ps:tutorial-object-manager-1');
        $this->setDescription('A cli playground for testing commands');
        parent::configure();
    }

//    protected function execute(InputInterface $input, OutputInterface $output)
//    {
//        $object = new \Pulsestorm\TutorialObjectManager1\Model\Example;
//        $message = $object->getHelloMessage();
//        $output->writeln(
//            $message
//        );
//    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $manager = $this->getObjectManager();
        $object  = $manager->create('Pulsestorm\TutorialObjectManager1\Model\Example');
        $message = $object->getHelloMessage();
        $output->writeln(
            $message
        );
    }

}